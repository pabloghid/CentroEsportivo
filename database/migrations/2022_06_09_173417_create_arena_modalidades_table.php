<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArenaModalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arena_modalidades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('arena_id')->unsigned()->nullable();
            $table->bigInteger('modalidade_id')->unsigned()->nullable();

            $table->foreign('arena_id')->references('id')->on('arenas');
            $table->foreign('modalidade_id')->references('id')->on('modalidades');
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
        Schema::dropIfExists('arena_modalidades');
    }
}
