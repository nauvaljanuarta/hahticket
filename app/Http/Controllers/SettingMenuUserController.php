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
        // Validate that at least one menu is selected
        $request->validate([
            'menus' => 'required|array|min:1', // Ensure at least one menu is selected
            'menus.*' => 'exists:menus,id', // Ensure all selected menus exist in the menus table
        ]);

        // Delete the previous menu assignments for this role
        SettingMenuUser::where('id_jenis_user', $roleId)->delete();

        // Insert the new menu assignments
        foreach ($request->menus as $menuId) {
            SettingMenuUser::create([
                'id_jenis_user' => $roleId,
                'menu_id' => $menuId,
                'create_by' => Auth::user()->username,
                'delete_by' => '', // Leave blank initially, or implement delete tracking
                'update_by' => Auth::user()->username,
            ]);
        }

        return redirect('/admin/role')->with('success', 'Menus updated successfully');
    }
}
