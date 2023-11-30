<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;
    protected $table = "lotes";
    protected $fillable = ['quantidadeProduto', 'dataFabricacao', 'dataValidade', 'produto_id'];

    public function produto(){
        return $this->belongsTo("App\Models\Produto");
    }

}
