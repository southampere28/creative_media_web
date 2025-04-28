<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $table = 'studies';
    protected $fillable = ['name', 'id_users', 'title', 'content', 'image'];

    // relasi id_user
    public function author()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
