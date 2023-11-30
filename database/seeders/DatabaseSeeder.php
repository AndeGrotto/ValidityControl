<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(LoteSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(ItensPedidoSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(EntregaSeeder::class);
        $this->call(MotoristaSeeder::class);
        $this->call(CaminhaoSeeder::class);
    }
}
