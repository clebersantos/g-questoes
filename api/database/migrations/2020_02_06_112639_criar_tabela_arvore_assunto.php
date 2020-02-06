<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaArvoreAssunto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arvore_assunto', function (Blueprint $table) {
            $table->bigIncrements('arvore_assunto_id');

            $table->unsignedBigInteger('assunto_pai_id');
            $table->foreign('assunto_pai_id')
                ->references('assunto_id')->on('assuntos');

            $table->unsignedBigInteger('assunto_filho_id');
            $table->foreign('assunto_filho_id')
                ->references('assunto_id')->on('assuntos');

            $table->unique('assunto_filho_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arvore_assunto');
    }
}
