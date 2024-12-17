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
    public function pemesananEventTickets()
    {
        return $this->hasMany(PemesananEventTicket::class);
    }
}
