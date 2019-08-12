<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('item_id');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_student');
    }
}
