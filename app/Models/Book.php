<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function book_detail()
    {
        return $this->belongsTo(BookDetail::class, 'isbn', 'isbn');
    }
}
