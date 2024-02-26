<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilinfobansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civilinfobans', function (Blueprint $table) {
            $table->id();
              $table->string('division_ban');
            $table->string('district_ban');
            $table->string('thana_ban');
            $table->string('suboffice_ban');
            $table->string('postcode_ban'); 
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
        Schema::dropIfExists('civilinfobans');
    }
}
