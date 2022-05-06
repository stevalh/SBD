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
            $table->foreignId('Full_Name')->unique();
            $table->string('email')->unique();
            $table->unsignedInteger('OTP');
            $table->string('level')->default('member');
            $table->foreignId('test_id')->nullable();
            $table->foreignId('vaccine_id')->nullable();
        
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
