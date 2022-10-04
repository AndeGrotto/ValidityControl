<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataPedido');
            //$table->integer('cliente_id')->unsigned();// Id da tabela clientes
            //$table->foreign('cliente_id')->references('id')->on('clientes'); // Define o campo como chave extrangeira (foreign key)
            $table->timestamps();
        });

        DB::table('pedidos')->insert([
            ['dataPedido' => '2022-09-30'],
            ['dataPedido' => '2022-10-15'],
            ['dataPedido' => '2022-10-10']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
