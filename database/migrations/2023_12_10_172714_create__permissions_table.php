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
        Schema::create('Permissions', function (Blueprint $table) {
            $table->id();
            $table->string("Branch");
            $table->string("Username");
            $table->string("Date");
            $table->string("Status");
            $table->string("PermittedBy");
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
        Schema::dropIfExists('Permissions');
    }
};
