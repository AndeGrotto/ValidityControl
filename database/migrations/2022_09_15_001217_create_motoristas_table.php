<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMotoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoristas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('telefone');
            $table->timestamps();
        });

        DB::table('motoristas')->insert([
            ['nome' => 'Armindo Marques', 'telefone' => '52 915478966'],
            ['nome' => 'Joaquim Pereira', 'telefone' => '62 987454521'],
            ['nome' => 'Carlos Magros', 'telefone' => '54 996058388)']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motoristas');
    }
}
