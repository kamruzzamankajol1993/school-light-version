<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->string('ward_no_ban');
            $table->string('personal_id');
            $table->string('ward_no_eng');
            $table->string('city_cor_name_ban');
            $table->string('city_cor_name_eng');
            $table->string('district_ban');
            $table->string('district_eng');
            $table->string('postal_code_ban');
            $table->text('postal_code_eng');
            $table->string('post_office_ban');
            $table->string('post_office_eng');
            $table->string('police_station_ban');
            $table->string('police_station_eng');
            $table->string('office_address_ban');
            $table->string('office_address_eng');
            $table->string('phone');
            $table->string('email');
            $table->string('border_image');
            $table->string('status');
            $table->string('blong');
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
        Schema::dropIfExists('wards');
    }
}
