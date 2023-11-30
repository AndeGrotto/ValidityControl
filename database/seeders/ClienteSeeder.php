<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(['razaoSocial' => 'AJ Tecnologias', 'cpf_cnpj' => '90.605.983/0001-82', 'situacao' => 'Ativo', 'telefone' => '5398451-4744', 'dataCadastro' => '2022-09-19']);
        Cliente::create(['razaoSocial' => 'Casa do Fut', 'cpf_cnpj' => '18.492.273/0001-66', 'situacao' => 'Ativo', 'telefone' => '5198696-6048', 'dataCadastro' => '2022-10-15']);
        Cliente::create(['razaoSocial' => 'Barbearia do Marquinhos', 'cpf_cnpj' => '47.790.456/0001-66', 'situacao' => 'Ativo', 'telefone' => '5499713-1822', 'dataCadastro' => '2022-08-29']);
        Cliente::create(['razaoSocial' => 'Sinuca do Santos', 'cpf_cnpj' => '22.994.446/0001-78', 'situacao' => 'Cancelado', 'telefone' => '5498777-1112', 'dataCadastro' => '2022-01-12']);
        Cliente::create(['razaoSocial' => 'Bar do Careca', 'cpf_cnpj' => '33.212.889/0001-24', 'situacao' => 'Pendente', 'telefone' => '5499713-2492', 'dataCadastro' => '2022-04-09']);
    }
}
