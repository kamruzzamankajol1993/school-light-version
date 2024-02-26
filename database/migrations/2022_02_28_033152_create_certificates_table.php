<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('header_left_text');
            $table->string('header_center_text')->nullable();
            $table->string('header_right_text')->nullable();
            $table->string('body_text')->nullable();
            $table->string('footer_left_text')->nullable();
            $table->string('footer_center_text')->nullable();
            $table->string('footer_right_text')->nullable();
            $table->string('header_height')->nullable();
            $table->string('footer_height')->nullable();
            $table->string('body_height')->nullable();
            $table->string('body_width')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('background_image')->nullable();
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
        Schema::dropIfExists('certificates');
    }
}
