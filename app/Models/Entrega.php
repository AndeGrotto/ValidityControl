<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;
    protected $table = "entregas";
    protected $fillable = ['dataSaida', 'dataEntrega', 'motorista_id'];

    
    public function motorista(){
        return $this->belongsTo("App\Models\Motorista");
    }    
}
