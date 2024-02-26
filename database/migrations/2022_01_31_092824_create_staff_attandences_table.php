<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffAttandencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_attandences', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('staff_main_id')->nullable();
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->string('attandences')->nullable();
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
        Schema::dropIfExists('staff_attandences');
    }
}
