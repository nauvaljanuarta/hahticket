<?php

namespace App\Http\Controllers;

use App\Models\JenisUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = JenisUser::all();
        return view('admin.role',compact('roles'));
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
