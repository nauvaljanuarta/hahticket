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
        return view('customer.dashboard', compact('menus', 'assignedMenus', 'events'));
    }
    public function show($slug, $id)
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $event = Event::with(['category', 'organizer', 'tickets'])->findOrFail($id);

        return view('customer.detail', compact('event', 'menus', 'assignedMenus'));
    }
    public function checkout(Request $request)
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $tickets = $request->input('tickets', []);
        // Mengubah tiket yang diinputkan menjadi array
        $cart = array_map(function ($ticketData) {
            return json_decode($ticketData, true);
        }, $tickets);
        // Ambil event ID dari tiket pertama yang ada di cart (asumsi semua tiket di cart milik event yang sama)
        $eventId = $cart[0]['ticket']['event'] ?? null; // 'event' di sini adalah foreign key
        // Jika event tidak ditemukan
        if (!$eventId) {
            return redirect()->back()->with('error', 'Event not found!');
        }
        $totalAmount = array_reduce($cart, function($carry, $item) {
            return $carry + $item['totalPrice'];
        }, 0);
        // Ambil data event berdasarkan ID
        $event = Event::find($eventId);
        // Jika event tidak ditemukan
        if (!$event) {
            return redirect()->back()->with('error', 'Event not found!');
        }
        return view('customer.checkout', compact('cart', 'event','menus', 'assignedMenus', 'totalAmount'));
    }
}
