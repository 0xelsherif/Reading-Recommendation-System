<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ReadingInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReadingIntervalController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'starting_page' => 'required|numeric',
            'ending_page' => 'required|numeric|gte:starting_page'
        ]);
        // Create a new reading interval record
        ReadingInterval::create($request->all());
        // Return a success response
        return response()->json(['message' => 'Reading interval added successfully'], 201);

    }

    
    public function recommendedBooks()
    {
        // Query the database table 'reading_intervals' to fetch reading intervals
        // Select the columns 'books.id' aliased as 'book_id', 'books.title' aliased as 'book_name', 
        // and calculate the sum of the expression (ending_page - starting_page + 1) aliased as 'num_of_read_pages'
        $recommendedBooks = DB::table('reading_intervals')
        ->select('books.id as book_id', 'books.title as book_name', DB::raw('SUM(ending_page - starting_page + 1) as num_of_read_pages'))
        // Join the 'books' table with the 'reading_intervals' table on 'reading_intervals.book_id' and 'books.id'
        ->join('books', 'reading_intervals.book_id', '=', 'books.id')
        // Group the results by 'books.id' and 'books.title'
        ->groupBy('books.id', 'books.title')
        // Order the results by 'num_of_read_pages' in descending order
        ->orderByDesc('num_of_read_pages')
        // Limit the number of results to 5
        ->limit(5)
        // Execute the query and retrieve the results
        ->get();
        // Return a JSON response with the most read books
        return response()->json($recommendedBooks);
    }

}
