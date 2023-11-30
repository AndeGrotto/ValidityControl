<?php

namespace Database\Seeders;

use App\Models\ItensPedido;
use Illuminate\Database\Seeder;

class ItensPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItensPedido::create(['quantidadeItem' => 300, 'valorTotal' => 299.99]);
        ItensPedido::create(['quantidadeItem' => 560, 'valorTotal' => 439.99]);
        ItensPedido::create(['quantidadeItem' => 420, 'valorTotal' => 349.99]);
        ItensPedido::create(['quantidadeItem' => 1000, 'valorTotal' => 1559.99]);
        ItensPedido::create(['quantidadeItem' => 620, 'valorTotal' => 680.99]);
    }
}
