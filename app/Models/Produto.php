<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produtos";
    protected $fillable = ['estoque','descricao', 'validade', 'preco', 'tipoBebida'];

    public function pedido(){
        return $this->belongsToMany("App\Models\Pedido");
    }

    public function lotes() {
        return $this->hasMany("App\Models\Lote");
    }
}
