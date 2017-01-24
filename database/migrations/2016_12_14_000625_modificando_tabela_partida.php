<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificandoTabelaPartida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partidas', function ($table) {
            $table->integer('meu_time_id')->unsigned();
        });

        Schema::table('partidas', function (Blueprint $table) {
            $table->foreign('meu_time_id')->references('id')->on('meu_times');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partidas', function ($table) {
            $table->dropColumn('meu_time_id');
        });
    }
}
