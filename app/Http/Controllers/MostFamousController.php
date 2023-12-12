<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class MostFamousController extends Controller
{
    public function index() {
        return view('famous.index', [
            'title' => 'E-Library | Most Famous Author',
            'authors' => Author::select('authors.*')
            ->selectRaw('COALESCE(SUM(ratings.rating), 0) as total_rating')
            ->join('books', 'authors.id', '=', 'books.authors_id')
            ->leftJoin('ratings', 'books.id', '=', 'ratings.books_id')
            ->groupBy('authors.id')
            ->orderByDesc('total_rating')
            ->limit(10)
            ->get(),
        ]);
    }
}
