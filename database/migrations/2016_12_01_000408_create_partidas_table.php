<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('time_id')->unsigned();
            $table->integer('estadio_id')->unsigned();
            $table->integer('mando_de_campo');
            $table->string('resultado_river');
            $table->string('resultado_adv');
            $table->integer('campeonato_id')->unsigned();
            $table->timestamp('data')->nullable();
            $table->timestamps();
        });

        Schema::table('partidas', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('time_id')->references('id')->on('times');
            $table->foreign('estadio_id')->references('id')->on('estadios');
            $table->foreign('campeonato_id')->references('id')->on('campeonatos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
