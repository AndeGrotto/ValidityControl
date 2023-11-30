<?php

namespace Database\Seeders;

use App\Models\Motorista;
use Illuminate\Database\Seeder;

class MotoristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motorista::create(['nome' => 'Armindo Marques', 'telefone' => '52915478966']);
        Motorista::create(['nome' => 'Joaquim Pereira', 'telefone' => '62987454521']);
        Motorista::create(['nome' => 'Carlos Magros', 'telefone' => '54996058388']);
        Motorista::create(['nome' => 'Marquinhos Silva', 'telefone' => '45984559355']);
        Motorista::create(['nome' => 'Vagner Timbras', 'telefone' => '22976212999']);
    }
}
