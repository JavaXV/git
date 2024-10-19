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
        Schema::create('Person', function (Blueprint $table) {
            $table->id();
            $table->string("Branch");
            $table->string("CustomerId");
            $table->string("Fullname");
            $table->string("FieldOfficer");
            $table->string("Email");
            $table->string("Gender");
            $table->string("Job");
            $table->string("country");
            $table->string("HomeAddress");
            $table->string("NearestBusStop");
            $table->string("MaritalStatus");
            $table->string("DateOfBirth");
            $table->string("SMSAlert");
            $table->string("State");
            $table->string("AccountNo");
            $table->string("NextOfKin");
            $table->string("NextOfKinAddress");
            $table->string("NextOfKinPhone");
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
        Schema::dropIfExists('Person');
    }
};
