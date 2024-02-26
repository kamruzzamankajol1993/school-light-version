<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_name')->nullable();
            $table->string('header_text_left')->nullable();
            $table->string('header_center_text')->nullable();
            $table->string('header_right_text')->nullable();
            $table->string('body_text')->nullable();
            $table->string('footer_left_text')->nullable();
            $table->text('footer_center_text')->nullable();
            $table->string('footer_right_text')->nullable();
            $table->string('header_height')->nullable();
            $table->text('footer_height')->nullable();
            $table->text('body_height')->nullable();
            $table->text('body_width')->nullable();
            $table->text('backfround_image')->nullable();
              $table->text('photo')->nullable();
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
        Schema::dropIfExists('student_certificates');
    }
}
