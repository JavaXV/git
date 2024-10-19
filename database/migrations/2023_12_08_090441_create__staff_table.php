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
        Schema::create('Staff', function (Blueprint $table) {
            $table->id();
            $table->string("Branch");
            $table->string("StaffId");
            $table->string("Fullname");
            $table->string("Username");
            $table->string("Phoneno");
            $table->string("Gender");
            $table->string("Passwword");
            $table->string("Token");
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
        Schema::dropIfExists('Staff');
    }
};
