<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->float('expected_loan', 9, 2)->nullable();
            $table->float('loan_percentage', 9, 2)->nullable();
            $table->integer('installments')->nullable();
            $table->float('total_loan', 9, 2)->nullable();
            $table->float('amount_settled', 9, 2)->nullable();
            $table->float('amount_balance', 9, 2)->nullable();
            $table->integer('current_installment')->nullable();
            $table->date('next_date')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('assistant_id')->nullable();
            $table->float('compliance_rate', 3, 2)->nullable();
            $table->string('status')->nullable();
            $table->string('file')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
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
        Schema::dropIfExists('user_loans');
    }
};
