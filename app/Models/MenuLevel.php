<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'create_by',
        'update_by',
    ];

    // Menu Levels can have many menu items
    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_level');
    }
}
