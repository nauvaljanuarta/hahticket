<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'event_category',
        'penyelenggara',
        'description',
        'event_date',
        'event_link',
        'location',
        'pic',
        'capacity',
    ];

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category');
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'penyelenggara');
    }
    public function tickets()
    {
        return $this->hasMany(EventTicket::class, 'event');
    }
}
