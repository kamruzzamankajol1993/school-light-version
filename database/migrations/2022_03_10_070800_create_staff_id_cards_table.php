<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffIdCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_id_cards', function (Blueprint $table) {
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
            $table->string('desi')->nullable();
            $table->string('depart')->nullable();
            $table->string('date_of_joining')->nullable();
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
        Schema::dropIfExists('staff_id_cards');
    }
}
