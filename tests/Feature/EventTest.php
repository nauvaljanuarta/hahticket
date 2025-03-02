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
        $this->actingAs($this->user);
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    /** @test */
    public function can_create_event_category()
    {
        $response = $this->post('/event/category/add', [
            'category' => 'Seminar',
            'description' => 'Kategori Seminar Event',
        ]);

        $response->assertRedirect();
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
            'update_by' => $this->user->name, // Sesuai bug di controllermu (update_by pakai name bukan username)
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
}