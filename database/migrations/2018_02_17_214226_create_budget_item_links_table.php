<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetItemLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_item_links', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('budget_item_id');
            $table->unsignedInteger('budget_id');
            $table->timestamps();

            $table->foreign('budget_item_id')->references('id')->on('budget_items');
            $table->foreign('budget_id')->references('id')->on('budgets');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget_item_links');
    }
}
