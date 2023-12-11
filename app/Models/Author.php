<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(Book::class, 'id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'id');
    }
}
