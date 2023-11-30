<?php

namespace Database\Seeders;

use App\Models\Caminhao;
use Illuminate\Database\Seeder;

class CaminhaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caminhao::create(['placa' => 'ABC7895']);
        Caminhao::create(['placa' => 'CDA8745']);
        Caminhao::create(['placa' => 'XKY5478']);
        Caminhao::create(['placa' => 'FXO8364']);
        Caminhao::create(['placa' => 'JKL1128']);
    }
}
