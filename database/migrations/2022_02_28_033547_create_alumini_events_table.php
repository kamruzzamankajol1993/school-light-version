<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAluminiEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumini_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_for')->nullable();
            $table->string('event_title')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->text('note')->nullable();
            $table->text('event_notification_msg')->nullable();
            $table->string('type_noti')->nullable();
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
        Schema::dropIfExists('alumini_events');
    }
}
