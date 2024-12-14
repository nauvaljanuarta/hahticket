<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',
        'no_hp',
        'jenis_user_id',
        'create_by',
        'update_by',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function jenisuser()
    {
        return $this->belongsTo(JenisUser::class, 'jenis_user_id'); // Pastikan 'jenis_user_id' adalah kolom yang benar
    }
    public function hasRole($role)
    {
        return $this->jenisUser && $this->jenisUser->jenis_user === $role;
    }
}
