<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Event;
use App\Models\EventTicket;
use App\Models\PemesananEventTicket;
use App\Models\Pemesanan;
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

        $cart = array_map(function ($ticketData) {
            return json_decode($ticketData, true);
        }, $tickets);

        $eventId = $cart[0]['ticket']['event'] ?? null;
        
        if (!$eventId) {
            return redirect()->back()->with('error', 'Event not found!');
        }
        $totalAmount = array_reduce(
            $cart,
            function ($carry, $item) {
                return $carry + $item['totalPrice'];
            },
            0,
        );
        // Ambil data event berdasarkan ID
        $event = Event::find($eventId);
        // Jika event tidak ditemukan
        if (!$event) {
            return redirect()->back()->with('error', 'Event not found!');
        }
        return view('customer.checkout', compact('cart', 'event', 'menus', 'assignedMenus', 'totalAmount'));
    }

    public function checkoutstore(Request $request)
    {
        // Inisialisasi totalAmount
        $totalAmount = 0;

        // Hitung total amount berdasarkan items dalam cart
        foreach ($request->items as $item) {
            // Menambahkan sub_total ke totalAmount
            $totalAmount += $item['sub_total']; // sub_total sudah dihitung sebelumnya di front-end
        }

        // Store the order details in 'pemesanan' table
        $pemesanan = new Pemesanan();
        $pemesanan->user_id = auth()->id(); // Assuming the user is authenticated
        $pemesanan->status = 'Pending'; // Status order, misalnya 'Pending' atau 'Completed'
        $pemesanan->total = $totalAmount; // Total amount yang dihitung di atas
        $pemesanan->save();

        // Store the items in 'pemesanan_event_ticket' pivot table
        foreach ($request->items as $item) {
            PemesananEventTicket::create([
                'pemesanan_id' => $pemesanan->id,
                'event_ticket_id' => $item['event_ticket_id'],
                'quantity' => $item['quantity'],
                'sub_total' => $item['sub_total'], // Menggunakan nilai sub_total dari request
            ]);
        }

        // Redirect to a success page or another page
        return redirect('/order')->with('success', 'Pemesanan berhasil dilakukan');
    }
}
