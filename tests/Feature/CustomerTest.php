<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventTicket;
use App\Models\Pemesanan;
use App\Models\PemesananEventTicket;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class CustomerTest extends TestCase
{
    use DatabaseTransactions;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Buat user langsung insert manual, tanpa factory
        $this->user = User::create([
            'username' => 'customer_test',
            'password' => bcrypt('password'),
            'email' => 'customer@test.com',
            'no_hp' => '0867361273',
            'jenis_user_id' => 2, // Sesuaikan dengan tipe user customer di sistem kamu
            'create_by' =>'system',
            'update_by' =>'system'
        ]);

        $this->actingAs($this->user);

        DB::table('jenis_pembayaran')->insert([
        'id' => 1,
        'pembayaran' => 'Transfer Bank',
        'description' => 'Pembayaran melalui transfer bank',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }

    /** @test */
    public function user_can_access_dashboard()
    {
        $response = $this->get(route('user.dashboard'));

        $response->assertStatus(200)
                 ->assertViewIs('customer.dashboard');
    }

    /** @test */
    public function user_can_view_event_detail()
    {
        $category = EventCategory::create([
            'category' => 'Seminar',
            'description' => 'Kategori Seminar',
            'create_by' => $this->user->username,
            'update_by' => $this->user->username,
        ]);

        $event = Event::create([
            'event_name' => 'Sample Event',
            'event_category' => $category->id,
            'penyelenggara' => $this->user->id,
            'description' => 'Deskripsi Event',
            'event_date' => now()->addDays(5),
            'event_link' => 'https://example.com',
            'location' => 'Jakarta',
            'pic' => 'event_pics/sample.jpg',
            'capacity' => 100,
        ]);

        EventTicket::create([
            'ticket_name' => 'Early Bird',
            'description' => 'Tiket murah',
            'event' => $event->id,
            'price' => 50000,
        ]);

        $response = $this->get(route('event.show', ['slug' => 'sample-event', 'id' => $event->id]));

        $response->assertStatus(200);
        $response->assertViewIs('customer.detail');
        $response->assertSee('Sample Event');
        $response->assertSee('Early Bird');
    }

    /** @test */
    public function user_can_checkout_tickets()
    {
        $category = EventCategory::create([
            'category' => 'Seminar',
            'description' => 'Kategori Seminar',
            'create_by' => $this->user->username,
            'update_by' => $this->user->username,
        ]);

        $event = Event::create([
            'event_name' => 'Sample Event',
            'event_category' => $category->id,
            'penyelenggara' => $this->user->id,
            'description' => 'Deskripsi Event',
            'event_date' => now()->addDays(5),
            'event_link' => 'https://example.com',
            'location' => 'Jakarta',
            'pic' => 'event_pics/sample.jpg',
            'capacity' => 100,
        ]);

        $ticket = EventTicket::create([
            'ticket_name' => 'Regular Ticket',
            'description' => 'Tiket biasa',
            'event' => $event->id,
            'price' => 50000,
        ]);

        $cartData = [
            'items' => [
                [
                    'event_ticket_id' => $ticket->id,
                    'quantity' => 2,
                    'sub_total' => 100000,
                ],
            ],
        ];

        $response = $this->post(route('checkout.store'), $cartData);

        $response->assertRedirect('/order');
        $this->assertDatabaseHas('pemesanan', [
            'user_id' => $this->user->id,
            'status' => 'Pending',
            'total' => 100000,
        ]);
        $this->assertDatabaseHas('pemesanan_event_ticket', [
            'event_ticket_id' => $ticket->id,
            'quantity' => 2,
            'sub_total' => 100000,
        ]);
    }

    /** @test */
    public function user_can_view_order_list()
    {
        $pemesanan = Pemesanan::create([
            'user_id' => $this->user->id,
            'status' => 'Pending',
            'total' => 200000,
        ]);

        $response = $this->get(route('order'));

        $response->assertStatus(200)
                 ->assertViewIs('customer.order')
                 ->assertSee(number_format($pemesanan->total, 0, ',', '.'));
    }

    /** @test */
    public function user_can_make_payment()
    {
        $pemesanan = Pemesanan::create([
            'user_id' => $this->user->id,
            'status' => 'Pending',
            'total' => 200000,
        ]);

        $response = $this->post(route('handlePayment', ['id' => $pemesanan->id]));

        $response->assertRedirect();
        $this->assertDatabaseHas('pemesanan', [
            'id' => $pemesanan->id,
            'status' => 'Paid',
        ]);
        $this->assertDatabaseHas('transaksi', [
            'pemesanan_id' => $pemesanan->id,
            'status' => 'Paid',
            'jumlah' => 200000,
        ]);
    }

    /** @test */
    public function user_can_view_transactions()
    {
        $pemesanan = Pemesanan::create([
            'user_id' => $this->user->id,
            'status' => 'Paid',
            'total' => 200000,
        ]);

        Transaksi::create([
            'pemesanan_id' => $pemesanan->id,
            'jenis_pembayaran' => 1,
            'jumlah' => 200000,
            'status' => 'Paid',
        ]);

        $response = $this->get(route('transactions'));

        $response->assertStatus(200)
                 ->assertViewIs('customer.transaksi')
                 ->assertSee(number_format(200000, 0, ',', '.'));
    }
}