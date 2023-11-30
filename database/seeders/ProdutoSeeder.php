<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create(['estoque' => '0', 'descricao' => 'Guaraná 2L', 'validade' => 365, 'preco' => 3.69, 'tipoBebida' => 'Refrigerante']);
        Produto::create(['estoque' => '0', 'descricao' => 'Água Com Gás 500ML', 'validade' => 120, 'preco' => 0.80, 'tipoBebida' => 'Água']);
        Produto::create(['estoque' => '0', 'descricao' => 'Laranja 2L', 'validade' => 365, 'preco' => 3.79, 'tipoBebida' => 'Refrigerante']);
        Produto::create(['estoque' => '0', 'descricao' => 'Laranja 1L', 'validade' => 365, 'preco' => 1.99, 'tipoBebida' => 'Refrigerante']);
        Produto::create(['estoque' => '0', 'descricao' => 'Água Sem Gás 500ML', 'validade' => 365, 'preco' => 1.29, 'tipoBebida' => 'Água']);
    }
}
