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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('restrict');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('result');
            
            
            $table->string('patient_name');
            $table->unsignedBigInteger('patient_NIK');
            $table->foreign('patient_NIK')->references('NIK')->on('data')->onDelete('restrict');
            
            $table->timestamps();
        });
        /*
         CREATE TABLE tests(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            
            patient_id INT FOREIGN_KEY REFERENCES users(id),
            admin_id INT FOREIGN_KEY REFERENCES admins(id),
            patient_NIK INT FOREIGN_KEY REFERENCES data(NIK),

            patient_name VARCHAR(255) NOT NULL,
            patient_NIK INT NOT NULL,
            result VARCHAR(255) NOT NULL,
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
        Schema::dropIfExists('tests');
    }
};
