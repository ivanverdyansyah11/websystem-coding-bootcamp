<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function author() 
    {
        return $this->belongsTo(Author::class, 'authors_id');
    }
}
