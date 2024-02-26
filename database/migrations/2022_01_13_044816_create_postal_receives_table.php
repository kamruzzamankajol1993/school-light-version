<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostalReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_receives', function (Blueprint $table) {
            $table->id();
            $table->string('from_title');
            $table->string('refrence_no');
            $table->string('address');
            $table->text('note');
            $table->string('to_title');
            $table->string('date');
            $table->string('document');
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
        Schema::dropIfExists('postal_receives');
    }
}
