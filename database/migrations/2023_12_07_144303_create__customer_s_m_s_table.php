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
        Schema::create('CustomerSMSS', function (Blueprint $table) {
            $table->id();
            $table->string("AccountNumber");
            $table->string("AccountType");
            $table->string("PhoneNo");
            $table->string("SmsAlertStatus");
            $table->string("All");
            $table->string("PostedBy");
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
        Schema::dropIfExists('CustomerSMSS');
    }
};
