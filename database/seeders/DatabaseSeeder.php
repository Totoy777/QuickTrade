<?php

namespace Database\Seeders;

use App\Models\Request_type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Product::factory(30)->create();


        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(Request_typeSeeder::class);

        User::factory(10)->create()->each(function($user){
            $user->assignRole('Vendedor');
        });

      
    }
        


   
}
