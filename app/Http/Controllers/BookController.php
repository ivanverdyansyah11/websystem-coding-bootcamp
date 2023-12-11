<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('books.index', [
            'title' => 'E-Library | All Books Library',
            'books' => Book::with(['author', 'category'])->latest()->paginate(10),
        ]);
    }
}
