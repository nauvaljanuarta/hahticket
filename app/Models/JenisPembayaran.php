<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model yang di-plural-kan
    protected $table = 'jenis_pembayaran';

    // Tentukan primary key jika berbeda dengan id
    protected $primaryKey = 'id';

    // Tentukan atribut yang bisa diisi (fillable)
    protected $fillable = [
     'pembayaran', // Nama pembayaran seperti "Cash", "Credit Card", "Bank Transfer", dll
        'deskripsi', // Deskripsi atau penjelasan mengenai jenis pembayaran
    ];

    /**
     * Relasi dengan Transaksi
     * Sebuah jenis pembayaran bisa dimiliki oleh banyak transaksi
     */
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
