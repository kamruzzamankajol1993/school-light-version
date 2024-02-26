<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_ids', function (Blueprint $table) {
            $table->id();
            $table->string('background_image');
            $table->string('logo')->nullable();
            $table->string('signature')->nullable();
            $table->string('school_name')->nullable();
            $table->string('address_phone_email')->nullable();
            $table->string('id_card_title')->nullable();
            $table->string('header_color')->nullable();

            $table->string('staff_name')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('current_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('design_type')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('date_of_joinimg')->nullable();
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
        Schema::dropIfExists('staff_ids');
    }
}
