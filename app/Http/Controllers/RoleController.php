<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\JenisUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{

    public function index()
    {
        $roles = JenisUser::all();
        $menus = Menu::with('level', 'parent')->whereNull('parent_id')->get();
        return view('admin.role',compact('roles','menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_user' => 'required|string|max:40|unique:jenis_users,jenis_user',
        ]);

        JenisUser::create([
            'jenis_user' => $request->jenis_user,
            'create_by' => Auth::user()->username,
            'update_by' => Auth::user()->username,
        ]);

        return redirect()->back()->with('success', 'Role successfully created');
    }

    public function update(Request $request, string $id)
    {
        $role = JenisUser::findOrFail($id);
        $role->update([
            'jenis_user' => $request->jenis_user,
            'update_by' => Auth::user(),
        ]);

        return redirect()->back()->with('success', 'Role successfully updated');
    }

    public function destroy(string $id)
    {
        $role = JenisUser::findOrFail($id);
        $role->delete();

        return redirect()->back()->with('success', 'Role successfully deleted');
    }
}
