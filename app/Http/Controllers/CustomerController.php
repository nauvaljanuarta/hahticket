<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Event;
use App\Models\EventTicket;
class CustomerController extends Controller
{
    public function index()
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $events = Event::all();
        return view ('customer.dashboard',compact('menus', 'assignedMenus', 'events'));
    }
    public function show($slug, $id)
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $event = Event::with(['category', 'organizer', 'tickets'])->findOrFail($id);

        return view('customer.detail', compact('event','menus', 'assignedMenus'));
    }
    public function showCheckout()
    {

        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('events.index')->with('error', 'Keranjang Anda kosong.');
        }

        $totalAmount = 0;
        foreach ($cart as $item) {
            $ticket = EventTicket::findOrFail($item['ticketId']);
            $totalAmount += $ticket->price * $item['qty'];
        }

        return view('customer.checkout', [
            'cart' => $cart,
            'totalAmount' => $totalAmount
        ]);
    }

    
}

