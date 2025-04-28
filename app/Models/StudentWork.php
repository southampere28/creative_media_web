<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentWork extends Model
{
    use HasFactory;

    protected $table = 'student_works';
    protected $fillable = ['name', 'id_users', 'description', 'image'];

    // relasi id_user
    public function author()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
