<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseInfosTable extends Migration
{
    /**
     * Run the migrations.
     * 基地信息表
     * @return void
     */
    public function up()
    {
        Schema::create('base_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('base_type_id');
            $table->string('title');
            $table->string('cover');
            $table->string('albums');
            $table->string('video');
            $table->string('address');
            $table->string('specials');
            $table->text('description');
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
        Schema::dropIfExists('base_infos');
    }
}
