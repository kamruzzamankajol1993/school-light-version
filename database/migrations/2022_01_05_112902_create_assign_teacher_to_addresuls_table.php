<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTeacherToAddresulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_teacher_to_addresuls', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->nullable();
            $table->string('subject_id')->nullable();
            $table->string('sreni_id')->nullable();
            $table->string('department_id');
            $table->string('section_id');
            $table->string('exam_id');
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
        Schema::dropIfExists('assign_teacher_to_addresuls');
    }
}
