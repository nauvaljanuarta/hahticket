<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';

    protected $fillable = [
        'transaksi_id',
        'pemesanan_event_ticket_id',  // Relasi ke pemesanan_event_ticket
        'quantity',
        'unit_price',
        'subtotal',
    ];

    // Relasi dengan Transaksi
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    // Relasi dengan PemesananEventTicket
    public function pemesananEventTicket()
    {
        return $this->belongsTo(PemesananEventTicket::class);
    }
}
