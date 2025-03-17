<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventCategory extends Model
{
    use HasFactory;

    protected $table = 'event_categories';

    protected $primaryKey = 'id';

    protected $fillable = ['category', 'description', 'create_by', 'update_by'];

    // Define relationships
    public function events()
    {
        return $this->hasMany(Event::class,);
    }
}
