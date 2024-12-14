<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuLevel;
use App\Models\JenisUser;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = JenisUser::all();
        $menuslist = Menu::all();
        $menuLevels = MenuLevel::all();
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        return view('admin.menu', compact('menus', 'role', 'menuslist', 'menuLevels', 'assignedMenus'));
    }

    public function store(Request $request)
    {
        // Create a new menu using the validated data
        Menu::create([
            'menu_name' => $request->menu_name,
            'menu_link' => $request->menu_link,
            'menu_icon' => $request->menu_icon,
            'parent_id' => $request->parent_id,
            'id_level' => $request->id_level,
            'create_by' => Auth::user()->username, // Set creator
            'update_by' => Auth::user()->username, // Set updater
            'delete_mark' => 0, // Default "not deleted"
        ]);

        return redirect()->back()->with('success', 'Menu created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $menu->update([
            'menu_name' => $request->menu_name,
            'menu_link' => $request->menu_link,
            'menu_icon' => $request->menu_icon,
            'parent_id' => $request->parent_id,
            'id_level' => $request->id_level,
            'update_by' => Auth::user()->username,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        $menu->delete();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Menu deleted successfully.');
    }
}
