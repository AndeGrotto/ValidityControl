<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create(['dataPedido' => '2022-09-30']);
        Pedido::create(['dataPedido' => '2022-10-15']);
        Pedido::create(['dataPedido' => '2022-10-10']);
        Pedido::create(['dataPedido' => '2021-12-01']);
        Pedido::create(['dataPedido' => '2022-07-28']);
    }
}
