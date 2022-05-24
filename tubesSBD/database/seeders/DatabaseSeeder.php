<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\User;
use App\Models\vaccine_type;
use App\Models\Data;

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

        vaccine_type::create([

            'name'=>'Moderna'
        ]);

        vaccine_type::create([
            'name'=>'Sinovac'
        ]);

        User::create([
            'fname'=>"Kenzie",
            'email'=>"kenziefubrianto@gmail.com"
        ]);
        User::create([
            'fname'=>"Steven",
            'email'=>"huangwieyang@gmail.com"
        ]);
        User::create([
            'fname'=>"Erick",
            'email'=>"erickuniv@gmail.com"
        ]);
        User::create([
            'fname'=>"Andre",
            'email'=>"elizgozali@gmail.com"
        ]);
        User::create([
            'fname'=>"Ariyo",
            'email'=>"m45syahraza@gmail.com"
        ]);


        City::create([
            'name'=>'Medan',
            
        ]);
        City::create([
            'name'=>'Binjai',
            
        ]);
        City::create([
            'name'=>'Belawan',
            
        ]);



        //Location


        Location::create([
            'location_name'=>'Thamrin Plaza',
            'address'=>'Jl.M.H Thamrin',
            'city_id'=>1,
            
        ]);
        Location::create([
            'location_name'=>'Texas Chicken',
            'address'=>'Jl.Putri Merak Jingga',
            'city_id'=>1,
           
        ]);
        Location::create([
            'location_name'=>'Sun Plaza',
            'address'=>'Jl.KH.Zainul Arifin',
            'city_id'=>1,
            
        ]);
        Location::create([
            'location_name'=>'Nelayan',
            'address'=>'Jl.apel',
            'city_id'=>2,
           
        ]);
        Location::create([
            'location_name'=>'Sushi',
            'address'=>'Jl.Mangga',
            'city_id'=>2,
            
        ]);
        Location::create([
            'location_name'=>'KFC',
            'address'=>'JL.Antena',
            'city_id'=>2,
            
        ]);
        Location::create([
            'location_name'=>'Solaria',
            'address'=>'Jl.Kelinci',
            'city_id'=>3,
            
        ]);
        Location::create([
            'location_name'=>'Yuki Mart',
            'address'=>'Jl.Maret',
            'city_id'=>3,
          
        ]);
        Location::create([
            'location_name'=>'Brastagi Supermarket',
            'address'=>'Jl.Buah',
            'city_id'=>3,
           
        ]);

        Data::create([
            'NIK'=>10000001,
            'fname'=>"Kenzie Fubrianto"
        ]);
        Data::create([
            'NIK'=>10000002,
            'fname'=>"Ariyo Syahraza"
        ]);
        Data::create([
            'NIK'=>10000003,
            'fname'=>"Steven Valentino"
        ]);
        Data::create([
            'NIK'=>10000004,
            'fname'=>"Andre Gozali"
        ]);
        Data::create([
            'NIK'=>10000005,
            'fname'=>"Erick Lorus"
        ]);


        
    }
}
