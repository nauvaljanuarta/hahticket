<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $user = Auth::user();
            if ($user->jenis_user_id == 1) {
                return redirect()->intended('/admin/dashboard')->with('success', 'Welcome Admin!');
            } elseif ($user->jenis_user_id == 3) {
                return redirect()->intended('/event/dashboard')->with('success', 'Welcome Event Organizer!');
            }

            return redirect()->intended('/dashboard')->with('success', 'Welcome Customer!');
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
            'create_by' => 'system',
            'created_at' => now(),
            'update_by' => 'system',
            'updated_at' => now(), // Add user creation logic
        ]);

        $user->save();

        return redirect()->route('loginview'); // Redirect to dashboard after registration
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return redirect()->route('loginview');
    }
}