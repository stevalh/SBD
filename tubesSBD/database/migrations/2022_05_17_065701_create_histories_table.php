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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreignId("locations_id");
            $table->timestamps();
            $table->boolean('check_out')->default(false);
            
        });

        /*
            CREATE TABLE histories(
                id INT AUTO_INCREMENT PRIMARY_KEY, 
                users_id INT FOREIGN_KEY REFERENCES users(id),
                locations_id INT FOREIGN_KEY REFERENCES locations(id)
                check_out boolean DEFAULT false;
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
        Schema::dropIfExists('histories');
    }
};
