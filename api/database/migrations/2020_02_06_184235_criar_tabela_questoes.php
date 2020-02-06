<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaQuestoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 5000);
            $table->unsignedBigInteger('orgao_id');
            $table->foreign('orgao_id')
                ->references('id')->on('orgaos');
            $table->unsignedBigInteger('banca_id');
            $table->foreign('banca_id')
                ->references('id')->on('bancas');
            $table->unsignedBigInteger('assunto_id');
            $table->foreign('assunto_id')
                ->references('id')->on('assuntos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
