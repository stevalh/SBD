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
        Schema::enableForeignKeyConstraints();
        Schema::create('certificates', function (Blueprint $table) {

            $table->id();
            // $table->unsignedBigInteger('admin_id');
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('vaccine_id');
            
            $table->string('owner_name');
            $table->unsignedBigInteger('owner_NIK');

            // $table->foreign('admin_id')->references('id')->on('admins')->onDelete('restrict');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            // $table->foreign('vaccine_id')->references('id')->on('vaccine_types')->onDelete('restrict');
          
            $table->foreignId('admin_id')->constrained('admins');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('vaccine_id')->constrained('vaccine_types');
          
          
           
        });
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
