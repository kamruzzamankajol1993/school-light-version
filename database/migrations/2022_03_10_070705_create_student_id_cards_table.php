<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentIdCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_id_cards', function (Blueprint $table) {
            $table->id();
            $table->string('background_image')->nullable();
            $table->text('logo')->nullable();
            $table->text('signature')->nullable();
            $table->string('school_name')->nullable();
            $table->text('address/phone/email')->nullable();
            $table->text('id_card_title')->nullable();
            $table->string('header_color')->nullable();

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
            $table->string('blood_group')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('student_id_cards');
    }
}
