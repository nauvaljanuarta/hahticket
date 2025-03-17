<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTicket extends Model
{
    use HasFactory;

    protected $table = 'event_tickets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ticket_name', 'description', 'event', 'price'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event');
    }

    // Memperbaiki relasi dengan banyak pemesanan melalui pivot table
    public function pemesanans()
    {
        return $this->belongsToMany(Pemesanan::class, 'pemesanan_event_ticket', 'event_ticket_id', 'pemesanan_id')
            ->withPivot('quantity', 'sub_total'); // Pastikan pivot data bisa diakses
    }
}

