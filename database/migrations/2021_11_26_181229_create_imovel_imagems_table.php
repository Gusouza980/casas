<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_imagems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("imovel_id");
            $table->string("imagem", 255)->nullable();
            $table->timestamps();
            $table->foreign('imovel_id')->references('id')->on('imovels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel_imagems');
    }
}
