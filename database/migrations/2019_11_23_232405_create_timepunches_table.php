<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimepunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timepunches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('punch');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('attendee_id');

            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('attendee_id')->references('id')->on('attendees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timepunches');
    }
}
