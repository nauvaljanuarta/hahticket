<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JenisUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function loginview()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard'); // Redirect after login
        }

        return back()->withErrors(['login_error' => 'Invalid credentials']);
    }

    public function registerview()
    {

        return view('auth.register');
    }

    public function register(Request $request)
    {
       


        // Create new user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'jenis_user_id' => 2,
            'create_by' => 'system', // Add user creation logic
            'created_at' => now(), // Add user creation logic
            'update_by' => 'system', // Add user update logic
            'updated_at' => now(), // Add user creation logic
        ]);

        $user->save();

        return redirect()->route('loginview'); // Redirect to dashboard after registration
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
