<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\JenisUser;
use App\Models\SettingMenuUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingMenuUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($roleId)
    {
        $role = JenisUser::findOrFail($roleId);
        $menulist = Menu::all(); // Fetch all menus available for assignment
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();

        return view('admin.setting', compact('role', 'menulist', 'menus', 'assignedMenus'));
    }

    public function updateMenus(Request $request, $roleId)
    {
        
        $request->validate([
            'menus' => 'required|array|min:1',
            'menus.*' => 'exists:menus,id',
        ]);

        $user = Auth::check() ? Auth::user()->username : 'system'; // ini ditambahkan karena test gagal

        // Delete the previous menu assignments for this role
        SettingMenuUser::where('id_jenis_user', $roleId)->delete();

        // Insert the new menu assignments
        foreach ($request->menus as $menuId) {
            SettingMenuUser::create([
                'id_jenis_user' => $roleId,
                'menu_id' => $menuId,
                'create_by' => $user,
                'delete_by' => '', // Leave blank initially, or implement delete tracking
                'update_by' => $user,
            ]);
        }

        return redirect('/admin/role')->with('success', 'Menus updated successfully');
    }
}