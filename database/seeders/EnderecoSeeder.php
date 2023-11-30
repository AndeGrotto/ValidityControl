<?php

namespace Database\Seeders;

use App\Models\Endereco;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::create(['cep' => '99980-000', 'logradouro' => 'Nossa Senhora da Salete', 'numero' => 2707,  'bairro' => 'Interior', 'cidade' => 'David Canabarro', 'estado' => 'RS']);
        Endereco::create(['cep' => '99598-250', 'logradouro' => 'Centro', 'numero' => 48, 'bairro' => 'Avenida Brasil', 'cidade' => 'Passo Fundo', 'estado' => 'RS']);
        Endereco::create(['cep' => '99877-320', 'logradouro' => 'Centro', 'numero' => 778, 'bairro' => 'Interior', 'cidade' => 'Barra Funda', 'estado' => 'RS']);
        Endereco::create(['cep' => '78652-323', 'logradouro' => 'Centro', 'numero' => 1298, 'bairro' => 'Cidade', 'cidade' => 'Brasilia', 'estado' => 'DF']);
        Endereco::create(['cep' => '78544-998', 'logradouro' => 'Centro', 'numero' => 007, 'bairro' => 'Campo Alegre', 'cidade' => 'Chapecó', 'estado' => 'SC']);
    }
}
