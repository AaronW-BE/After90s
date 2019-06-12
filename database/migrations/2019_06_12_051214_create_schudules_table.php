<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchudulesTable extends Migration
{
    /**
     * Run the migrations.
     * 方案行程表
     * @return void
     */
    public function up()
    {
        Schema::create('schudules', function (Blueprint $table) {
            $table->bigIncrements('id');
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
