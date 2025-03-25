<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'PBL-45',
                'role' => 'admin',
                'gmail' => 'admin@gmail.com',
                'password' => bcrypt('rahasia321'),
            ],
        ];
        foreach($userData as $key =>$val){
            User::create($val);
        }
    }
}