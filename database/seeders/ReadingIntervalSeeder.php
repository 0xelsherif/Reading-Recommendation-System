<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReadingInterval;
use App\Helpers\SMSHelper;

class ReadingIntervalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReadingInterval::create([
            'user_id' => 1,
            'book_id' => 1,
            'starting_page' => 10,
            'ending_page' => 30,
        ]);

        ReadingInterval::create([
            'user_id' => 1,
            'book_id' => 2,
            'starting_page' => 40,
            'ending_page' => 50,
        ]);

        
        ReadingInterval::create([
            'user_id' => 2,
            'book_id' => 1,
            'starting_page' => 2,
            'ending_page' => 25,
        ]);

     
        ReadingInterval::create([
            'user_id' => 3,
            'book_id' => 2,
            'starting_page' => 1,
            'ending_page' => 10,
        ]);
    }
}
