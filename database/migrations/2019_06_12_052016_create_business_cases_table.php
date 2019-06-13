<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessCasesTable extends Migration
{
    /**
     * 企业案例
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('summary');
            $table->text('description');
            $table->string('location');
            $table->string('duration');
            $table->integer('people_count');
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
        Schema::dropIfExists('business_cases');
    }
}
