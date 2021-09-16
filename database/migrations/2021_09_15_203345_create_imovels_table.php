<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->nullable();
            $table->string("slug")->nullable();
            $table->string("codigo", 4)->nullable();
            $table->string("imagem1")->nullable();
            $table->string("imagem2")->nullable();
            $table->string("imagem3")->nullable();
            $table->string("imagem4")->nullable();
            $table->string("imagem5")->nullable();
            $table->string("titulo", 100)->nullable();
            $table->string("subtitulo", 100)->nullable();
            $table->string("icone1_texto", 70)->nullable();
            $table->string("icone2_texto", 70)->nullable();
            $table->string("icone3_texto", 70)->nullable();
            $table->string("icone4_texto", 70)->nullable();
            $table->string("icone5_texto", 70)->nullable();
            $table->mediumText("descricao")->nullable();
            $table->boolean("top")->default(false);
            $table->tinyInteger("lista")->default(0);
            $table->boolean("prioridade_lista")->default(false);
            $table->boolean("ativo")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovels');
    }
}
