<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('sreni_id')->nullable();
            $table->string('department_id')->nullable();
            $table->string('section_id')->nullable();
            $table->string('subject_id')->nullable();
            $table->string('students_id')->nullable();
            $table->string('exam_id')->nullable();
            $table->string('com')->nullable();
            $table->string('roll')->nullable();
            $table->string('exam_name')->nullable();
            $table->integer('written_exam')->default(0);
             $table->integer('prac_exam')->default(0);
            $table->integer('mcq_exam')->default(0);
            $table->integer('wm_per')->default(0);
            $table->integer('wm_total')->default(0);
            $table->integer('1st_tuto_exam')->default(0);
            $table->integer('2nd_tuto_exam')->default(0);
            $table->integer('3rd_tuto_exam')->default(0);
            $table->integer('tuto_per')->default(0);
            $table->integer('tuto_total')->default(0);
            $table->integer('viva')->default(0);
            $table->integer('behave')->nullable();
            $table->integer('main_total')->default(0);
            $table->integer('all_total')->default(0);
            $table->integer('grade_point')->default(0);
            $table->string('grade_letter')->default(0);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('results');
    }
}
