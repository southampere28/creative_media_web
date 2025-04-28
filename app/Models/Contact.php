<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // protected $table = 'contacts';
    protected $fillable = ['location', 'id_users', 'address', 'contact', 'email'];

    // relasi id_user
    public function author()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
