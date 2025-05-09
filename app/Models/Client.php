<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // protected $table = 'articles';
    protected $fillable = ['nama', 'id_users', 'link', 'image'];

    // relasi id_user
    public function author()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
