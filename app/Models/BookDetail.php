<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'isbn';

    protected $fillable = ['isbn','name','group_code','author','publisher','published_at'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
