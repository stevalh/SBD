<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     => 'Admin1',
            'email'    => 'admin@localhost.com',
            'role'    => 'admin',
            'password' => bcrypt('password'),
        ]);
    
        Admin::create([
            'name'     => 'Admin2',
            'email'    => 'editor@localhost.com',
            'role'    => 'admin',
            'password' => bcrypt('password'),
        ]);
    
        Admin::create([
            'name'     => 'Admin3',
            'email'    => 'operator@localhost.com',
            'role'    => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
