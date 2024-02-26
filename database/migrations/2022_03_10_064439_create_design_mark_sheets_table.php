<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignMarkSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_mark_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('template')->nullable();
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->string('exam_name')->nullable();
            $table->string('school_name')->nullable();
            $table->string('exam_center')->nullable();
            $table->text('body_text')->nullable();
            $table->string('footer_text')->nullable();
            $table->string('printing_date')->nullable();
            $table->text('left_logo')->nullable();
            $table->text('right_logo')->nullable();
            $table->text('left_sign')->nullable();
            $table->text('right_sign')->nullable();
            $table->text('middle_sign')->nullable();
            $table->text('backfround_image')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('admission_no')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->text('photo')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('exam_session')->nullable();
            $table->text('remark')->nullable();
            $table->string('division')->nullable();
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
        Schema::dropIfExists('design_mark_sheets');
    }
}
