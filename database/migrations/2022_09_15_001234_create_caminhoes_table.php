<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCaminhoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caminhoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa');
            $table->timestamps();
        });

        DB::table('caminhoes')->insert([
            ['placa' => 'ABC7895'],
            ['placa' => 'CDA8745'],
            ['placa' => 'XKY5478']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caminhoes');
    }
}
