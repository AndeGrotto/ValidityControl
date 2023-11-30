<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;
    protected $table = "motoristas";
    protected $fillable = ['nome', 'telefone','caminhao_id'];

    public function caminhao(){
        return $this->belongsTo("App\Models\Caminhao");
    }

    public function entregas() {
        return $this->hasMany("App\Models\Entrega");
    }

}

