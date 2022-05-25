<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'tel', 'email', 'birthday'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
