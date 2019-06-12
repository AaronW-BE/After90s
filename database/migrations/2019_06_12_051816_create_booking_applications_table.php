<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     * 预定申请表
     * @return void
     */
    public function up()
    {
        Schema::create('booking_applications', function (Blueprint $table) {
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
        Schema::dropIfExists('booking_applications');
    }
}
