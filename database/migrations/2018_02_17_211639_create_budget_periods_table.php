<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_periods', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('budget_id');
            $table->string('name');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->decimal('spent', 11, 2)->nullable();
            $table->decimal('income', 11, 2)->nullable();
            $table->decimal('balance', 11, 2)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('budget_periods');
    }
}
