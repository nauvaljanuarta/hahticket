<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $role = Auth::user()->jenisuser->jenis_user; // Mengambil role user

            // Cek jika role adalah Admin atau EO, jika iya redirect ke halaman lain
            if ($role === 'Admin' || $role === 'EO') {
                return redirect()->back()->with('error', 'You do not have permission to access this page.');
            }
        }

        return $next($request);
    }
}
