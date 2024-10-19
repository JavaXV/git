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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("Branch");
            $table->integer("BranchId");
            $table->integer("FieldOfficerId");
            $table->string("FieldOfficer");
            $table->string("DepositeAmount");
            $table->string("WithdrawalAmount");
            $table->string("AccountBalance");
            $table->string("ApprovedByUsername");
            $table->string("ApprovedDate");
            $table->string("TransactionComment");
            $table->string("DailyPaymentChartNumber");
            $table->string("PageNumber");
            $table->string("AccountNumber");
            $table->string("TransactionType");
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
        Schema::dropIfExists('transactions');
    }
};
