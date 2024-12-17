<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananEventTicket extends Model
{
    use HasFactory;

    protected $table = 'pemesanan_event_ticket';

    protected $fillable = [
        'pemesanan_id',
        'event_ticket_id',
        'quantity',
        'sub_total',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function eventTicket()
    {
        return $this->belongsTo(EventTicket::class);
    }
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
