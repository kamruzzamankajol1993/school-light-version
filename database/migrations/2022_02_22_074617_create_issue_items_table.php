<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_items', function (Blueprint $table) {
            $table->id();
            $table->string('user_type');
            $table->string('issue_to')->nullable();
            $table->string('issue_by')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('note')->nullable();
            $table->string('item_category')->nullable();
            $table->string('item')->nullable();
            $table->string('quantity')->nullable();
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
        Schema::dropIfExists('issue_items');
    }
}
