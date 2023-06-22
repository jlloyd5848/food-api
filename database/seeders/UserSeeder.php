<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This will create default user 
        User::create([
            'name' => 'John Smith',
            'email' => 'johnsmith@mail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
