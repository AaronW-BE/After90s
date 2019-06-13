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
            $table->integer('schedule_id');
            $table->string('name');
            $table->string('contact');
            $table->date('departure_date');
            $table->integer('people_count')->default(1);
            $table->string('remarks')->default('');
            $table->tinyInteger('is_contacted')->default(0);
            $table->tinyInteger('is_departed')->default(0);
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
