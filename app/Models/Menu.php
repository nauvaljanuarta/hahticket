<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $primaryKey = 'id';
    protected $fillable = ['id_level', 'menu_name', 'menu_link', 'menu_icon', 'parent_id', 'delete_mark', 'create_by', 'update_by'];

    // A menu item belongs to a level
    public function level()
    {
        return $this->belongsTo(MenuLevel::class, 'id_level');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // A menu item can have a parent
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function roles()
    {
        return $this->belongsToMany(JenisUser::class, 'setting_menu_users', 'menu_id', 'id_jenis_user');
    }
}
