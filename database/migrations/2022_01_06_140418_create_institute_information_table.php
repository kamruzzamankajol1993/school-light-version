<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_information', function (Blueprint $table) {
            $table->id();
             $table->string('logo')->nullable();
            $table->string('name')->nullable();
            $table->string('code');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('session');
            $table->string('session_start_month');
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
        Schema::dropIfExists('institute_information');
    }
}
