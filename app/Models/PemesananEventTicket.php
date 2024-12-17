<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananEventTicket extends Model
{
    use HasFactory;

    // Define the table name if it is not the plural of the model name
    protected $table = 'pemesanan_event_ticket';

    // Fillable attributes to allow mass assignment
    protected $fillable = [
        'pemesanan_id',
        'event_ticket_id',
        'quantity',
        'sub_total',
    ];

    // Define the relationship with the Pemesanan model
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    // Define the relationship with the EventTicket model
    public function eventTicket()
    {
        return $this->belongsTo(EventTicket::class);
    }
}
