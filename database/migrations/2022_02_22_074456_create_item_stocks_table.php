<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('item_category');
            $table->string('item')->nullable();
            $table->string('supplier')->nullable();
            $table->string('store')->nullable();
            $table->string('quantity')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('date')->nullable();
            $table->string('doc')->nullable();
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
        Schema::dropIfExists('item_stocks');
    }
}
