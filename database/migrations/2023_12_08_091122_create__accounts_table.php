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
        Schema::create('Accounts', function (Blueprint $table) {
            $table->id();
            $table->string("Branch");
            $table->string("CustomerId");
            $table->string("Fullname");
            $table->string("FieldOfficer");
            $table->string("Product");
            $table->string("PageNo");
            $table->string("AccountNo");
            $table->string("InitialDeposite");
            $table->string("Interest");
            $table->string("NanagementFee");
            $table->string("ModeOfPayment");
            $table->string("AmountRequest");
            $table->string("MaturityDate");
            $table->string("CreatedBy");
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
        Schema::dropIfExists('Accounts');
    }
};
