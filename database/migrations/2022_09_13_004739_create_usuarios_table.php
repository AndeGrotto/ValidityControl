<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('usuario');
            $table->string('password');
            $table->string('palavraRecuperacao');
            $table->timestamps();
        });

        DB::table('usuarios')->insert([
            ['nome' => 'João Pedro Zorzeto', 'email' => 'joao.zorzeto@gmail.com', 'usuario' => 'fogo','password' => 'foguinho', 'palavraRecuperacao' => 'fogs12345'],
            ['nome' => 'Anderson Grotto', 'email' => 'anderson.grotto@gmail.com', 'usuario' => 'ande','password' => 'ande22', 'palavraRecuperacao' => 'grtt123'],
            ['nome' => 'Carlos Dos Santos', 'email' => 'carlos.santos@gmail.com', 'usuario' => 'carlos', 'password' => 'car22', 'palavraRecuperacao' => 'cardosant555']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
