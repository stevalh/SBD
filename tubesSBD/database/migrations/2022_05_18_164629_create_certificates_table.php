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
    
        Schema::create('certificates', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('restrict');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

            $table->unsignedBigInteger('vaccine_id');
            $table->foreign('vaccine_id')->references('id')->on('vaccine_types')->onDelete('restrict');
            
            $table->string('owner_name');
            $table->unsignedBigInteger('owner_NIK');
            $table->foreign('owner_NIK')->references('NIK')->on('data')->onDelete('restrict');
            $table->timestamps();   
        });
        /*
        CREATE TABLE certificates (
            id INT AUTO_INCREMENT PRIMARY_KEY,
            admin_id INT FOREIGN_KEY  REFERENCES admins(id),
            user_id INT FOREIGN_KEY REFERENCES users(id),
            owner_NIK INT FOREIGN_KEY REFERENCES data(NIK),
            vaccine_id INT  FOREIGN_KEY REFERENCES vaccine_types(id),

            owner_name VARCHAR(255) NOT NULL,
            owner_NIK INT NOT NULL
        );
        
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
};
