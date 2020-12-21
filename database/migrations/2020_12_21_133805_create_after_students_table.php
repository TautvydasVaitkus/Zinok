<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('after_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('mokynio_id');
            $table->unsignedInteger('veiklos_id');
            $table->foreign('mokynio_id')->references('id')->on('users');
            $table->foreign('veiklos_id')->references('id')->on('afters');
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
        Schema::dropIfExists('after_students');
    }
}
