<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    protected function getDueDateAttribute()
    {
        if($this->book->book_detail->is_new_book) {
            $due_date = date('Y-m-d', strtotime(('+10 days'), strtotime($this->created_at->toDateString())));
        } else {
            $due_date = date('Y-m-d', strtotime(('+15 days'), strtotime($this->created_at->toDateString())));
        }

        return $due_date;
    }

    protected function getIsDelayAttribute()
    {
        return strtotime($this->due_date) < strtotime(date('Y-m-d'));
    }
}
