<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAftersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pavadinimas');
            $table->string('aparasas');
            $table->date('pradzios_data');
            $table->date('pabaigos_data');
            $table->time('pradzios_laikas');
            $table->time('pabaigos_laikas');
            $table->integer('max_dalyviu');
            $table->unsignedInteger('mokytojo_id');
            $table->foreign('mokytojo_id')->references('id')->on('users');
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
        Schema::dropIfExists('afters');
    }
}
