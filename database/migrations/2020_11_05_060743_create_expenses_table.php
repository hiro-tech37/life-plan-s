<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('income_a', 4, 1); //少数1桁、全体4桁まで
            $table->decimal('income_b', 4, 1);
            $table->decimal('income_c', 4, 1);
            $table->decimal('expense_a', 4, 1);
            $table->decimal('expense_b', 4, 1);
            $table->decimal('expense_c', 4, 1);
            $table->decimal('total_expense', 4, 1);
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
