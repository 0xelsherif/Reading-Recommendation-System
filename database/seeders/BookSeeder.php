<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
        Book::create([
        'id' => 1,
        'title' => 'Clean Code',
        'pages_count' => 300,
        ]);

        Book::create([
            'id' => 2,
            'title' => 'Harry Potter',
            'pages_count' => 400,
        ]);

        Book::create([
            'id' => 3,
            'title' => 'The Great Gatsby',
            'pages_count' => 180,
        ]);

        Book::create([
            'id' => 4,
            'title' => 'To Kill a Mockingbird',
            'pages_count' => 281,
        ]);

        Book::create([
            'id' => 5,
            'title' => 'The Catcher in the Rye',
            'pages_count' => 214,
        ]);

        Book::create([
            'id' => 6,
            'title' => '1984',
            'pages_count' => 328,
        ]);

        Book::create([
            'id' => 7,
            'title' => 'The Lord of the Rings',
            'pages_count' => 1178,
        ]);

        Book::create([
            'id' => 8,
            'title' => 'Pride and Prejudice',
            'pages_count' => 279,
        ]);

        Book::create([
            'id' => 9,
            'title' => 'The Hobbit',
            'pages_count' => 310,
        ]);

        Book::create([
            'id' => 10,
            'title' => 'Animal Farm',
            'pages_count' => 112,
        ]);
    }
}
