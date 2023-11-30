<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    use HasFactory;
    protected $table = "itensPedidos";
    protected $fillable = ['quantidadeItem', 'valorTotal', 'pedido_id', 'produto_id'];
}
