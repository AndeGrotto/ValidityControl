<?php

namespace Database\Seeders;

use App\Models\Lote;
use Illuminate\Database\Seeder;

class LoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lote::create(['quantidadeProduto' => 300, 'dataFabricacao' => '2022-09-25', 'dataValidade' => '2022-09-25', 'produto_id' => 2]);
        Lote::create(['quantidadeProduto' => 560, 'dataFabricacao' => '2022-10-30', 'dataValidade' => '2022-11-12', 'produto_id' => 1]);
        Lote::create(['quantidadeProduto' => 420, 'dataFabricacao' => '2022-09-10', 'dataValidade' => '2022-10-02', 'produto_id' => 2]);
        Lote::create(['quantidadeProduto' => 800, 'dataFabricacao' => '2022-12-07', 'dataValidade' => '2022-12-28', 'produto_id' => 4]);
        Lote::create(['quantidadeProduto' => 120, 'dataFabricacao' => '2022-01-14', 'dataValidade' => '2022-02-21', 'produto_id' => 5]);
    }
}
