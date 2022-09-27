<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->string('bairro');
            $table->string('rua');
            $table->integer('numero');
            $table->timestamps();
        });

        DB::table('enderecos')->insert([
            ['cidade' => 'David Canabarro', 'estado' => 'RS', 'cep' => '99980-000', 'bairro' => 'Interior', 'rua' => 'Nossa Senhora da Salete', 'numero' => '2707'],
            ['cidade' => 'Passo Fundo', 'estado' => 'RS', 'cep' => '99598-250', 'bairro' => 'Avenida Brasil', 'rua' => 'Centro', 'numero' => '48'],
            ['cidade' => 'Barra Funda', 'estado' => 'RS', 'cep' => '99877-320', 'bairro' => 'Interior', 'rua' => 'Centro', 'numero' => '778']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
