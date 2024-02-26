<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_marks', function (Blueprint $table) {
            $table->id();
            $table->string('grader_name')->nullable();
            $table->string('grader_point')->nullable();
            $table->string('lower_mark')->nullable();
            $table->string('upper_mark')->nullable();
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
        Schema::dropIfExists('grade_marks');
    }
}
