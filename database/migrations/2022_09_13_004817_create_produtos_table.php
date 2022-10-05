<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->integer('validade');
            $table->double('preco');
            $table->string('tipoBebida');
            $table->timestamps();
        });

        DB::table('produtos')->insert([
            ['descricao' => 'Guaraná 2L', 'validade' => 365, 'preco' => 3.69, 'tipoBebida' => 'Refrigerante'],
            ['descricao' => 'Água Com Gás 500ML', 'validade' => 120, 'preco' => 0.80, 'tipoBebida' => 'Água'],
            ['descricao' => 'Laranja 2L', 'validade' => 365, 'preco' => 3.79, 'tipoBebida' => 'Refrigerante']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
