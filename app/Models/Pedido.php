<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "pedidos";
    protected $fillable = ['dataPedido', 'cliente_id'];

    public function produto(){
        return $this->belongsToMany("App\Models\Produto");
    }

    public function cliente(){
        return $this->belongsTo("App\Models\Cliente");
    }
}
