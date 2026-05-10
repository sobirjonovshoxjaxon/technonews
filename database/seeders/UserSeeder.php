<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder
        User::create([

            'name' => 'Shoxjaxon',
            'email' => 'shohjahonsobirjonov40@gmail.com',
            'password' => Hash::make('secret'),
        ]);

        // Factory
        
        // User::factory()->count(5)->create();
        // User::factory()->create([

        //     'email' => 'ustidan@yozilgan.com',
        // ]);
    }
}
