<?php 

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Nama tabel yang digunakan
     */
    protected $table = 'users';

    /**
     * Tentukan kolom-kolom yang bisa diisi secara massal:
     * 'name', 'email', 'password', dan 'role'.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];    

    /**
     * Kolom yang disembunyikan saat serialisasi.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Tipe data cast otomatis untuk kolom tertentu.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi one-to-many dengan model Article.
     */
    public function articles()
    {
        return $this->hasMany(\App\Models\Article::class);
    }

    /**
     * Relasi one-to-many dengan model Comment.
     */
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class);
    }
}

