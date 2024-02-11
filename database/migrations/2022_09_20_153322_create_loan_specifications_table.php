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
        Schema::create('loan_specifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('duration')->nullable();
            $table->string('per')->nullable();
            $table->float('penalt_value', 9, 2)->nullable();
            $table->enum('penalty_type', ['fixed', 'percentage'])->nullable();
            $table->longText('requirements')->nullable();
            $table->integer('borrower_group_size')->nullable();
            $table->float('original_fee', 9, 2)->nullable();
            $table->integer('need_business_plan')->nullable();
            $table->integer('need_recommendation_plan')->nullable();
            $table->integer('need_tpin')->nullable();
            $table->integer('need_nrc')->nullable();
            $table->integer('need_company_profile')->nullable();
            $table->integer('need_police_report')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            
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
        Schema::dropIfExists('loan_specifications');
    }
};
