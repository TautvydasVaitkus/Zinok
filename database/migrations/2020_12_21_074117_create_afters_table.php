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
            $table->date('pradzios_data');
            $table->date('pabaigos_data');
            $table->time('pradzios_laikas');
            $table->time('pabaigos_laikas');
            $table->integer('max_dalyviu');
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
