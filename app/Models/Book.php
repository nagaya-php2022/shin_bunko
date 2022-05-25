<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['isbn','stocked_at','wasted_at','memo'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function book_detail()
    {
        return $this->belongsTo(BookDetail::class, 'isbn', 'isbn');
    }
}
