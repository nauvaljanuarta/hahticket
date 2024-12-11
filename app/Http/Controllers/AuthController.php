<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view ('landing');
    }
    public function loginview()
    {
        return view ('auth.login');
    }
    public function login()
    {

    }
    public function registerview()
    {
        return view ('auth.register');
    }
    public function register()
    {

    }
    public function logout()
    {

    }

}
