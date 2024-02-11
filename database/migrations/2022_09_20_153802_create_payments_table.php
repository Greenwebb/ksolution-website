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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('origin_amount', 9, 2)->nullable();
            $table->string('settled_amount', 9, 2)->nullable();
            $table->string('penalty_amount', 9, 2)->nullable();
            $table->string('balance', 9, 2)->nullable();
            $table->string('loan_id', 9, 2)->nullable();
            $table->string('notes', 9, 2)->nullable();
            $table->string('user_id', 9, 2)->nullable();
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
        Schema::dropIfExists('payments');
    }
};
