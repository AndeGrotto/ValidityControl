<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantidadeProduto');
            $table->date('dataFabricacao');
            $table->timestamps();
        });

        DB::table('lotes')->insert([
            ['quantidadeProduto' => 300, 'dataFabricacao' => '2022-09-25'],
            ['quantidadeProduto' => 560, 'dataFabricacao' => '2022-10-30'],
            ['quantidadeProduto' => 420, 'dataFabricacao' => '2022-09-10']
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes');
    }
}
