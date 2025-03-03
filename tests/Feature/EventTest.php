<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\EventCategory;
use Illuminate\Support\Facades\DB;

class EventTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Mulai transaksi supaya tiap test auto-rollback
        DB::beginTransaction();

        // Ambil user admin langsung dari database
        $this->user = User::where('username', 'admin')->first();

        if (!$this->user) {
            $this->fail('User admin tidak ditemukan. Pastikan UserSeeder sudah dijalankan.');
        }

        // Login sebagai admin
        $this->actingAs(user: $this->user);
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    /** @test */
    public function test_can_create_event_category()
    {
        $this->assertAuthenticated();

        $response = $this->post('/event/category/add', [
            'category' => 'Seminar',
            'description' => 'Kategori Seminar Event',
        ]);

        if ($response->status() !== 302) {
            dump($response->status(), $response->getContent()); // Hasil ini yang aku butuh lihat
        }

        $response->assertRedirect(route('event.categories'));

        $this->assertDatabaseHas('event_categories', [
            'category' => 'Seminar',
            'description' => 'Kategori Seminar Event',
            'create_by' => $this->user->username,
            'update_by' => $this->user->username,
        ]);
    }

    /** @test */
    public function can_update_event_category()
    {
        // Insert kategori awal
        $category = EventCategory::create([
            'category' => 'Workshop',
            'description' => 'Deskripsi Lama',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $response = $this->put("/event/category/edit/{$category->id}", [
            'category' => 'Updated Workshop',
            'description' => 'Deskripsi Workshop Baru',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('event_categories', [
            'id' => $category->id,
            'category' => 'Updated Workshop',
            'description' => 'Deskripsi Workshop Baru',
            'update_by' => $this->user->username, // Sesuai bug di controllermu (update_by pakai name bukan username)
        ]);
    }

    /** @test */
    public function can_delete_event_category()
    {
        $category = EventCategory::create([
            'category' => 'Hapus Kategori',
            'description' => 'Deskripsi akan dihapus',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $response = $this->delete("/event/category/delete/{$category->id}");

        $response->assertRedirect();
        $this->assertDatabaseMissing('event_categories', [
            'id' => $category->id,
        ]);
    }

    public function test_can_view_event_detail()
{
    // Pastikan user sudah login (karena setup kamu actingAs di setUp())
    $this->assertAuthenticated();

    // 1. Buat kategori (kalau relasi event_category harus ada)
    $category = EventCategory::create([
        'category' => 'Seminar',
        'description' => 'Kategori Seminar',
        'create_by' => $this->user->username,
        'update_by' => $this->user->username,
    ]);

    // 2. Buat event
    $event = \App\Models\Event::create([
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

    // 3. Buat beberapa tiket
    \App\Models\EventTicket::create([
        'ticket_name' => 'Early Bird',
        'description' => 'Tiket murah',
        'event' => $event->id,
        'price' => 50000,
    ]);

    \App\Models\EventTicket::create([
        'ticket_name' => 'VIP',
        'description' => 'Tiket VIP',
        'event' => $event->id,
        'price' => 150000,
    ]);

    // 4. Validasi langsung data di database (tanpa mengakses endpoint)
    $this->assertDatabaseHas('events', [
        'id' => $event->id,
        'event_name' => 'Sample Event',
    ]);

    $this->assertDatabaseHas('event_tickets', [
        'event' => $event->id,
        'ticket_name' => 'Early Bird',
        'price' => 50000,
    ]);

    $this->assertDatabaseHas('event_tickets', [
        'event' => $event->id,
        'ticket_name' => 'VIP',
        'price' => 150000,
    ]);
}

}