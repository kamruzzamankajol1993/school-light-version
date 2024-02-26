<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content_type')->nullable();
            $table->string('assaign_section')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('department')->nullable();
            $table->string('upload_date')->nullable();
            $table->text('doc')->nullable();
            $table->string('des')->nullable();
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
        Schema::dropIfExists('upload_contents');
    }
}
