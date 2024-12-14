<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class CustomerController extends Controller
{
    public function index()
    {
        $menus = Menu::with('level', 'parent')->whereNull('parent_id')->get();
        return view ('user.dashboard',compact('menus'));
    }
}

