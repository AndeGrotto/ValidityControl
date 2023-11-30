<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddProdutoIdToLotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lotes', function (Blueprint $table) {
            $table->bigInteger('produto_id')->unsigned()->nullable();
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        DB::unprepared('DROP TRIGGER IF EXISTS AtualizarEstoque_Insert');
        DB::unprepared(
            'CREATE TRIGGER AtualizarEstoque_Insert AFTER INSERT
            ON lotes
            FOR EACH ROW
            BEGIN
                UPDATE produtos SET estoque = estoque + NEW.quantidadeProduto
            WHERE id = NEW.produto_id;
            END',
        );

        DB::unprepared('DROP TRIGGER IF EXISTS AtualizarEstoque_Update');
        DB::unprepared(
            'CREATE TRIGGER AtualizarEstoque_Update AFTER UPDATE
            ON lotes
            FOR EACH ROW
            BEGIN
	            UPDATE produtos SET estoque = (estoque - OLD.quantidadeProduto) + NEW.quantidadeProduto
            WHERE id = NEW.produto_id;
            END'
        );

        DB::unprepared('DROP TRIGGER IF EXISTS AtualizarEstoque_Delete');
        DB::unprepared(
            'CREATE TRIGGER AtualizarEstoque_Delete AFTER DELETE
            ON lotes
            FOR EACH ROW
            BEGIN
	            UPDATE produtos SET estoque = estoque - OLD.quantidadeProduto
            WHERE id = OLD.produto_id;
            END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lotes', function (Blueprint $table) {
            //
        });
    }
}
