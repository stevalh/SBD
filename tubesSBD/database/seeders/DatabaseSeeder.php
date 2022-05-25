<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\User;
use App\Models\vaccine_type;
use App\Models\Data;
use App\Models\Test;

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
        Data::create([
            'NIK'=>10000006,
            'fname'=>"Lucas"
        ]);
        
        
        
        User::create([
            'fname'=>"Kenzie Fubrianto",
            'email'=>"kenziefubrianto@gmail.com",
            'NIK'=>10000001
        ]);
        User::create([
            'fname'=>"Steven Valentino",
            'email'=>"huangwieyang@gmail.com",
            'NIK'=>10000003
        ]);
        User::create([
            'fname'=>"Erick Lorus",
            'email'=>"erickuniv@gmail.com",
            'NIK'=>10000005
        ]);
        User::create([
            'fname'=>"Andre Gozali",
            'email'=>"elizgozali@gmail.com",
            'NIK'=>10000004
        ]);
        User::create([
            'fname'=>"Ariyo Syahraza",
            'email'=>"m45syahraza@gmail.com",
            'NIK'=>10000002
        ]);

        vaccine_type::create([

            'name'=>'Moderna'
        ]);

        vaccine_type::create([
            'name'=>'Sinovac'
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
        Certificate::create([
            'admin_id'=>1,
            'user_id'=>1,
            'vaccine_id'=>2,
            'owner_NIK'=>10000001,
            'owner_name'=>'Kenzie Fubrianto'
        ]);
        Certificate::create([
            'admin_id'=>1,
            'user_id'=>1,
            'vaccine_id'=>2,
            'owner_NIK'=>10000001,
            'owner_name'=>'Kenzie Fubrianto'
        ]);
        
        Test::create([
            'admin_id'=>1,
            'patient_id'=>1,
            'result'=>'positive',
            'patient_NIK'=>10000001,
            'patient_name'=>'Kenzie Fubrianto'
        ]);
        
        
        
    }


}
