<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = ['razaoSocial', 'cpf_cnpj', 'situacao', 'telefone', 'dataCadastro'];

    public function pedidos() {
        return $this->hasMany("App\Models\Pedido");
    }
}
