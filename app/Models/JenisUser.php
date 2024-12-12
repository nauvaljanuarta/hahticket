<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_user',
        'create_by',
        'update_by',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
