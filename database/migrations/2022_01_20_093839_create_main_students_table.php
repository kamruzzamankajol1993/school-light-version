<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_students', function (Blueprint $table) {
            $table->id();
            $table->string('admission_no');
            $table->string('roll_number');
            $table->string('class');
            $table->string('section');
            $table->string('department');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('category');
            $table->string('religion');
            $table->string('caste');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('admission_date');
            $table->text('student_photo');
            $table->string('blood_group');
            $table->string('student_house');
            $table->string('height');
            $table->string('weight');
            $table->string('as_on_date');
            $table->text('medical_history');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('father_occupation');
            $table->string('father_yearly_incme');
            $table->string('father_photo');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('mother_occupation');
            $table->string('mother_yearly_income');
            $table->string('mother_photo');
            $table->string('if_guardian_is');
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->string('guardian_email');
            $table->string('guardian_photo');
            $table->string('guardian_phone');
            $table->string('guardian_occupation');
            $table->text('guardian_address');
            $table->string('if_guardian_address_is_current_address');
            $table->string('if_permanent_address_is_current_address');
            $table->text('current_address');
            $table->text('permanent_address');
            $table->string('route_list');
            $table->string('hostel');
            $table->string('room_no');
            $table->string('bank_account_number');
            $table->string('bank_name');
            $table->string('ifsc_code');
            $table->string('national_identification_number');
            $table->string('birth_certificate_number');
            $table->string('rte');
            $table->text('previous_school_details');
            $table->text('note');
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
        Schema::dropIfExists('main_students');
    }
}
