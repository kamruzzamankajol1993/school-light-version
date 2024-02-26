<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_plans', function (Blueprint $table) {
            $table->id();
            $table->string('subject_id');
            $table->string('lesson_id');
            $table->string('topic_id');
            $table->string('date')->nullable();
            $table->string('doc')->nullable();
            $table->string('teaching_method');
            $table->string('general_objectives');
            $table->string('previous_knnowledge');
            $table->string('comprehensive_question');
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
        Schema::dropIfExists('lesson_plans');
    }
}
