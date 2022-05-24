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
            $table->id();
            $table->string('fname');
            $table->string('email')->unique();
            $table->unsignedBigInteger('NIK')->nullable();
            $table->string('token')->nullable();
            $table->timestamps();
        
        });
    }
    /*
    CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY_KEY,
        fname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        NIK INT ,
        token VARCHAR(255)
    );
    
    */



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
