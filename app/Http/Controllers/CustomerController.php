<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Event;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
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
    public function order()
    {
        // Ambil data menu dan pemesanan pengguna yang sedang login
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $pemesanan = Pemesanan::with('eventTickets')->where('user_id', auth()->id())->get();

        return view('customer.order', compact('menus', 'assignedMenus', 'pemesanan'));
    }

    public function pembayaran(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        // Verifikasi apakah signature valid
        if ($hashed == $request->signature_key) {
            // Cek status transaksi
            if ($request->transaction_status == '') {
                // Temukan pemesanan berdasarkan order_id
                $order = Pemesanan::findOrFail($request->order_id);

                // Update status pemesanan menjadi 'Paid'
                $order->status = 'Paid';
                $order->save();

                // Tambahkan data transaksi
                $transaksi = new Transaksi();
                $transaksi->pemesanan_id = $order->id;
                $transaksi->jenis_pembayaran = 1; // Ganti dengan ID jenis pembayaran yang sesuai
                $transaksi->jumlah = $request->gross_amount;
                $transaksi->status = 'Paid';
                $transaksi->save();

                // Tambahkan detail transaksi untuk setiap event ticket
                foreach ($order->eventTickets as $eventTicket) {
                    // Temukan pemesanan_event_ticket yang sesuai
                    $pemesananEventTicket = PemesananEventTicket::where('pemesanan_id', $order->id)
                        ->where('event_ticket_id', $eventTicket->id)
                        ->first();

                    if ($pemesananEventTicket) {
                        DetailTransaksi::create([
                            'transaksi_id' => $transaksi->id,
                            'pemesanan_event_ticket_id' => $pemesananEventTicket->id, // Relasi dengan pemesanan_event_ticket
                            'quantity' => $pemesananEventTicket->quantity,
                            'unit_price' => $eventTicket->price, // Harga tiket per unit
                            'subtotal' => $pemesananEventTicket->sub_total, // Sub total dari tiket
                        ]);
                    }
                }

                return response()->json(['message' => 'Payment successful'], 200);
            }

            return response()->json(['message' => 'Invalid transaction status'], 400);
        }

        return response()->json(['message' => 'Signature verification failed'], 400);
    }

    public function handlePayment($id)
    {
        // Temukan pemesanan berdasarkan ID
        $order = Pemesanan::findOrFail($id);

        // Update status pemesanan menjadi 'Paid'
        $order->status = 'Paid';
        $order->save();

        // Buat transaksi baru
        $transaksi = new Transaksi();
        $transaksi->pemesanan_id = $order->id;
        $transaksi->jenis_pembayaran = 1; // Ganti sesuai dengan ID jenis pembayaran
        $transaksi->jumlah = $order->total;
        $transaksi->status = 'Paid';
        $transaksi->save();

        // Masukkan detail transaksi untuk setiap tiket dalam pemesanan
        foreach ($order->eventTickets as $ticket) {
            $pemesananEventTicket = PemesananEventTicket::where('pemesanan_id', $order->id)
                ->where('event_ticket_id', $ticket->id)
                ->first();

            if ($pemesananEventTicket) {
                DetailTransaksi::create([
                    'transaksi_id' => $transaksi->id,
                    'pemesanan_event_ticket_id' => $pemesananEventTicket->id,
                    'quantity' => $pemesananEventTicket->quantity,
                    'unit_price' => $ticket->price,
                    'subtotal' => $pemesananEventTicket->sub_total,
                ]);
            }
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pembayaran berhasil diproses.');
    }

    public function transactions()
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $user = Auth::user();
        $transaksi = Transaksi::whereHas('pemesanan', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->with(['pemesanan', 'jenisPembayaran'])->get();


        return view('customer.transaksi', compact('transaksi','menus', 'assignedMenus'));
    }
}