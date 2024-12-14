<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        return view('admin.dashboard', compact('menus', 'assignedMenus'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
