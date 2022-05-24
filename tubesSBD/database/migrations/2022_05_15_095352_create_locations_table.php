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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
            $table->string('address');
            $table->foreignId('city_id');
         
        });
        /**
         * CREATE TABLE locations(
         * id INT AUTO_INCREMENT PRIMARY_KEY,
         * location_name VARCHAR(255) NOT NULL,
         * address VARCHAR(255) NOT NULL,
         * city_id INT FOREIGN_KEY REFERENCES cities(id)
         *);
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
