<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civilinfos', function (Blueprint $table) {
            $table->id();
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('suboffice');
            $table->string('postcode');
            $table->string('division_bn');
            $table->string('district_bn');
            $table->string('thana_bn');
            $table->string('suboffice_bn');
            $table->string('postcode_bn');  
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
        Schema::dropIfExists('civilinfos');
    }
}
