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
        return view('admin.role');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_user' => 'required|string|max:40|unique:jenis_users,jenis_user',
        ]);

        JenisUser::create([
            'jenis_user' => $request->jenis_user,
            'create_by' => Auth::user(),
            'update_by' => Auth::user(),
        ]);

        return redirect()->back()->with('success', 'Role successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = JenisUser::findOrFail($id);
        $role->update([
            'jenis_user' => $request->jenis_user,
            'update_by' => Auth::user(),
        ]);

        return redirect()->route('role.index')->with('success', 'Role successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = JenisUser::findOrFail($id);
        $role->delete();

        return redirect()->route('role.index')->with('success', 'Role successfully deleted');
    }
}
