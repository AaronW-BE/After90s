<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     * 方案行程表
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('tags');
            $table->text('description');
            $table->decimal('price', 9,2);
            $table->string('location');
            $table->string('duration');
            $table->string('people_count');
            $table->string('benefits');
            $table->string('cover');
            $table->text('albums');
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
        Schema::dropIfExists('schudules');
    }
}
