<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Book;

class BooksRecommenderTest extends TestCase
{
    use RefreshDatabase;

    public function testSubmitReadingInterval()
    {
        // Create a user
        $user = User::factory()->create();

        // Create a book
        $book = Book::factory()->create();

        // Submit a reading interval
        $response = $this->actingAs($user)
            ->postJson('/api/reading-intervals', [
                'user_id' => $user->id,
                'book_id' => $book->id,
                'starting_page' => 2,
                'ending_page' => 12
            ]);

        // Assert the response is successful
        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Reading interval submitted successfully.'
            ]);
    }

    public function testRecommendBooks()
    {
        // Get recommended books
        $response = $this->get('/api/recommended-books');

        // Assert the response is successful
        $response->assertStatus(200);

        // Assert the structure of the response JSON
        $response->assertJsonStructure([
            '*' => [
                'book_id',
                'book_name',
                'num_of_read_pages'
            ]
        ]);
    }
}
