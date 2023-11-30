<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProdutoAndPedidoIdToItensPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itensPedidos', function (Blueprint $table) {
                $table->bigInteger('produto_id')->unsigned()->nullable();
                $table->foreign('produto_id')->references('id')->on('produtos');

                $table->bigInteger('pedido_id')->unsigned()->nullable();
                $table->foreign('pedido_id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itensPedidos', function (Blueprint $table) {
            //
        });
    }
}
