<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() 
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function author() 
    {
        return $this->belongsTo(Author::class, 'authors_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'ratings_id');
    }
}
