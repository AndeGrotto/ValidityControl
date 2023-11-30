<?php

namespace Database\Seeders;

use App\Models\Entrega;
use Illuminate\Database\Seeder;

class EntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entrega::create(['dataSaida' => '2022-09-30', 'dataEntrega' => '2022-10-05']);
        Entrega::create(['dataSaida' => '2022-10-15', 'dataEntrega' => '2022-10-22']);
        Entrega::create(['dataSaida' => '2022-05-16', 'dataEntrega' => '2022-06-01']);
        Entrega::create(['dataSaida' => '2022-07-22', 'dataEntrega' => '2022-08-06']);
        Entrega::create(['dataSaida' => '2022-06-20', 'dataEntrega' => '2022-06-23']);
    }
}
