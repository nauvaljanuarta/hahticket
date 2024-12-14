<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('jenis_user')->get();
        $roles = JenisUser::all();
        return view('admin.user',compact('users', 'roles'));
    }


    public function store(Request $request)
    {
        // Create a new user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'jenis_user_id' => $request->jenis_user_id,
            'create_by' => Auth::user()->username, // Store the user who created this record
            'update_by' => Auth::user()->username, // Store the user who created this record
        ]);

        return redirect()->back()->with('success', 'User created successfully!');

    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'no_hp' => 'required|string|max:15',
            'jenis_user_id' => 'required|string',
        ]);

        // Find the user to update
        $user = User::findOrFail($id);

        // Update the user's data
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jenis_user_id' => $request->jenis_user_id,
            'update_by' => Auth::user()->username, // Store the user who updated this record
        ]);

        return redirect()->back()->with('success', 'User updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');
    }
}
