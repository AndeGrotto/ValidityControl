<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razaoSocial');
            $table->string('cpf_cnpj');
            $table->string('situacao');
            $table->string('telefone');
            $table->date('dataCadastro');
            $table->timestamps();
        });

        DB::table('clientes')->insert([
            ['razaoSocial' => 'AJ Tecnologias', 'cpf_cnpj' => '90.605.983/0001-82', 'situacao' => 'Ativo', 'telefone' => '(53) 98451-4744', 'dataCadastro' => '2022-09-19'],
            ['razaoSocial' => 'Casa do Fut', 'cpf_cnpj' => '18.492.273/0001-66', 'situacao' => 'Ativo', 'telefone' => '(51) 98696-6048', 'dataCadastro' => '2022-10-15'],
            ['razaoSocial' => 'Barbearia do Marquinhos', 'cpf_cnpj' => '47.790.456/0001-66', 'situacao' => 'Ativo', 'telefone' => '(54) 99713-1822', 'dataCadastro' => '2022-08-29']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
