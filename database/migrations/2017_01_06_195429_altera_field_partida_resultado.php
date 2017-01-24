<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlteraFieldPartidaResultado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partidas', function($table)
        {
            $table->string('resultado_river', 50)->nullable()->change();
            $table->string('resultado_adv', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partidas', function($table)
        {
            $table->string('resultado_river', 50)->nullable(false)->change();
            $table->string('resultado_adv', 50)->nullable(false)->change();
        });
    }
}
