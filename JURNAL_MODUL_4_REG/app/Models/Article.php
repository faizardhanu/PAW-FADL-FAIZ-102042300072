<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $table = 'articles';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['title', 'content', 'image'];

    /**
     * Relasi: Artikel ini dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi: Artikel memiliki banyak komentar.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

