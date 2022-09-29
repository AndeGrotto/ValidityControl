<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateItensPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensPedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantidadeItem');
            $table->double('valorTotal');
            $table->timestamps();
        });

        DB::table('itensPedidos')->insert([
            ['quantidadeItem' => 300, 'valorTotal' => 300.99],
            ['quantidadeItem' => 560, 'valorTotal' => 440.99],
            ['quantidadeItem' => 420, 'valorTotal' => 350.99]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_pedidos');
    }
}
