<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCaminhaoIdToMotoristas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motoristas', function (Blueprint $table) {
            $table->bigInteger('caminhao_id')->unsigned()->nullable();
            $table->foreign('caminhao_id')->references('id')->on('caminhoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('motoristas', function (Blueprint $table) {
            //
        });
    }
}
