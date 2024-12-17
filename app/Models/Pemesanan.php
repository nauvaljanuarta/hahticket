<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'user_id',
        'status',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Memperbaiki relasi dengan banyak tiket melalui pivot table
    public function eventTickets()
    {
        return $this->belongsToMany(EventTicket::class, 'pemesanan_event_ticket', 'pemesanan_id', 'event_ticket_id')
            ->withPivot('quantity', 'sub_total');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

