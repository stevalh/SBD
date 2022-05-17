<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            AdminSeeder::class,
        ]);

        City::create([
            'name'=>'Medan',
            'cured'=>2,
            'infected'=>4,
        ]);
        City::create([
            'name'=>'Binjai',
            'cured'=> 4,
            'infected'=>6,
        ]);
        City::create([
            'name'=>'Belawan',
            'cured'=>1,
            'infected'=>3,
        ]);



        //Location


        Location::create([
            'location_name'=>'Thamrin Plaza',
            'address'=>'Jl.M.H Thamrin',
            'city_id'=>1,
            'max'=>100
        ]);
        Location::create([
            'location_name'=>'Texas Chicken',
            'address'=>'Jl.Putri Merak Jingga',
            'city_id'=>1,
            'max'=>30
        ]);
        Location::create([
            'location_name'=>'Sun Plaza',
            'address'=>'Jl.KH.Zainul Arifin',
            'city_id'=>1,
            'max'=>70
        ]);
        Location::create([
            'location_name'=>'Nelayan',
            'address'=>'Jl.apel',
            'city_id'=>2,
            'max'=>35
        ]);
        Location::create([
            'location_name'=>'Sushi',
            'address'=>'Jl.Mangga',
            'city_id'=>2,
            'max'=>45
        ]);
        Location::create([
            'location_name'=>'KFC',
            'address'=>'JL.Antena',
            'city_id'=>2,
            'max'=>60
        ]);
        Location::create([
            'location_name'=>'Solaria',
            'address'=>'Jl.Kelinci',
            'city_id'=>3,
            'max'=>40
        ]);
        Location::create([
            'location_name'=>'Yuki Mart',
            'address'=>'Jl.Maret',
            'city_id'=>3,
            'max'=>35
        ]);
        Location::create([
            'location_name'=>'Brastagi Supermarket',
            'address'=>'Jl.Buah',
            'city_id'=>3,
            'max'=>50
        ]);
        
    }
}
