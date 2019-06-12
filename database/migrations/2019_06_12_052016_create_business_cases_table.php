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
