<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingInterval extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'starting_page', 'ending_page'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
