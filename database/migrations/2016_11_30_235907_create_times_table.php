<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('primeiro_nome');
            $table->string('nome_completo');
            $table->string('sigla');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->timestamps();
        });

        Schema::table('times', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('times');
    }
}