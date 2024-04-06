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
        User::factory()->create([
            'id' => 1,
            'name' => 'User 1',
            'email' => 'user1@example.com',
            'password' => bcrypt('password'),
        ]);
    
        User::factory()->create([
            'id' => 2,
            'name' => 'User 2',
            'email' => 'user2@example.com',
            'password' => bcrypt('password'),
        ]);
    
        User::factory()->create([
            'id' => 3,
            'name' => 'User 3',
            'email' => 'user3@example.com',
            'password' => bcrypt('password'),
        ]);
    
        User::factory()->create([
            'id' => 4,
            'name' => 'User 4',
            'email' => 'user4@example.com',
            'password' => bcrypt('password'),
        ]);
    
        User::factory()->create([
            'id' => 5,
            'name' => 'User 5',
            'email' => 'user5@example.com',
            'password' => bcrypt('password'),
        ]);
    
    }
}
