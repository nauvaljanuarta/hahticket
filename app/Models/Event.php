<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            // Membuat slug berdasarkan nama event
            $event->slug = Str::slug($event->event_name);
        });
    }

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
