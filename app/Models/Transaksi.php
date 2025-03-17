<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'pemesanan_id',
        'jenis_pembayaran',
        'jumlah',
        'status',
    ];

    // Relasi dengan Pemesanan
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    // Relasi dengan JenisPembayaran
    public function jenisPembayaran()
    {
        return $this->belongsTo(JenisPembayaran::class);
    }

    // Relasi dengan DetailTransaksi
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
