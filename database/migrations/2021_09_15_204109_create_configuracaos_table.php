<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateConfiguracaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("top1")->nullable();
            $table->unsignedBigInteger("top2")->nullable();
            $table->unsignedBigInteger("top3")->nullable();
            $table->unsignedBigInteger("top4")->nullable();
            $table->unsignedBigInteger("top5")->nullable();
            $table->timestamps();
            $table->foreign('top1')->references('id')->on('imovels')->onDelete('cascade');
            $table->foreign('top2')->references('id')->on('imovels')->onDelete('cascade');
            $table->foreign('top3')->references('id')->on('imovels')->onDelete('cascade');
            $table->foreign('top4')->references('id')->on('imovels')->onDelete('cascade');
            $table->foreign('top5')->references('id')->on('imovels')->onDelete('cascade');
        });

        DB::table('configuracaos')->insert([
            'top1' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracaos');
    }
}
