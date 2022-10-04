<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";
<<<<<<< HEAD
    protected $fillable = ['nome', 'email', 'usuario', 'password', 'palavraRecuperacao'];
=======
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
}
