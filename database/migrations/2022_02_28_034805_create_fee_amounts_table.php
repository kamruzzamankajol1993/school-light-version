<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_amounts', function (Blueprint $table) {
            $table->id();
            $table->string('fee_group')->nullable();
            $table->string('fee_type')->nullable();
            $table->string('due_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('fine_type')->nullable();
            $table->string('percen')->nullable();
            $table->string('fine_amount')->nullable();
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
        Schema::dropIfExists('fee_amounts');
    }
}
