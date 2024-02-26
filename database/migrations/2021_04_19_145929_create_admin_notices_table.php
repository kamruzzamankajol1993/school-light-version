<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_notices', function (Blueprint $table) {
            $table->id();
            $table->string('ward_id');
            $table->string('sender_id');
            $table->string('admin_id')->nullable();
            $table->string('date');
            $table->string('subject');
            $table->text('des');
             $table->string('status');
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
        Schema::dropIfExists('admin_notices');
    }
}
