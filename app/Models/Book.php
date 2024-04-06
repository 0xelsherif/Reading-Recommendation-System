<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'pages_count'];

    public function readingIntervals()
    {
        return $this->hasMany(ReadingInterval::class);
    }
}
