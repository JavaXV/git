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
        Schema::create('InitialProfit', function (Blueprint $table) {
            $table->id();
            $table->string("Branch");
            $table->string("InitialProfit");
            $table->string("Date");
            $table->string("Year");
            $table->string("ByCustomerName");
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
        Schema::dropIfExists('InitialProfit');
    }
};
