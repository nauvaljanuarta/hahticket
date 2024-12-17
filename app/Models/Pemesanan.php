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

    public function eventTickets()
    {
        return $this->hasMany(PemesananEventTicket::class);
    }
}
