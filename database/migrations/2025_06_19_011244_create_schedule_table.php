<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_week', 10)->comment('day of the schedule within a week');
            $table->dateTime('time_slot')->comment('timeslot of the schedule');
            $table->string('room', 20)->comment('room of the schedule');
            $table->integer('term')->comment('term in a school year of the schedule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
