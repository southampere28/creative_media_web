<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // protected $table = 'articles';
    protected $fillable = ['title', 'id_users', 'description', 'content', 'image'];

    // relasi id_user
    public function author()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
