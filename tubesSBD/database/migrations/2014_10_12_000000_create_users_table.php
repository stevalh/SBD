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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id')->primary();
            $table->string('Full_Name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('NIK')->nullable();
            $table->unsignedInteger('OTP')->nullable();
            $table->string('level')->default('member');
            $table->unsignedBigInteger('test_id')->nullable();
            $table->unsignedBigInteger('vaccine_id')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
