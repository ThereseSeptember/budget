<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->string('name');
            $table->string('store');
            $table->decimal('price', 8, 2);
            $table->enum('type', ['income', 'expense']);
            $table->boolean('recurring')->default(0);
            $table->string('location')->nullable();
            $table->datetime('occured_at')->nullable();
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
        Schema::dropIfExists('budget_items');
    }
}
