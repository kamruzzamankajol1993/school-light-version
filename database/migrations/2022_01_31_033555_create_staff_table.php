<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('role')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('date_of_joining')->nullable();
            $table->text('phone')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('photo')->nullable();
            $table->string('current_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('qualification')->nullable();
            $table->string('note')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('epf_no')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('work_shift')->nullable();
            $table->string('location')->nullable();
            $table->string('medical_leave')->nullable();
            $table->string('casual_leave')->nullable();
            $table->string('maternity_leave')->nullable();

            $table->string('account_title')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_branch_name')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('resume')->nullable();
            $table->string('joining_letter')->nullable();
            $table->string('other_documents')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
