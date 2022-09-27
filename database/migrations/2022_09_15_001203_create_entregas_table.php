<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataSaida');
            $table->date('dataEntrega');
            $table->timestamps();
        });

        DB::table('entregas')->insert([
            ['dataSaida' => '2022-09-30', 'dataEntrega' => '2022-10-05'],
            ['dataSaida' => '2022-10-15', 'dataEntrega' => '2022-10-22'],
            ['dataSaida' => '2022-10-10', 'dataEntrega' => '2022-10-18']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
}
