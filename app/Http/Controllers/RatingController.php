<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function index() {
        return view('ratings.index', [
            'title' => 'E-Library | Rating Author',
            'books' => Book::with(['author', 'category'])->latest()->get(),
        ]);
    }

    public function searchBook($id)
    {
        $books = Book::where('authors_id', $id)->get();

        return response()->json(['books' => $books]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'books_id' => 'required|integer',
            'rating' => 'required|integer',
        ]);

        $rating = Rating::create($validatedData);

        if ($rating) {
            return redirect(route('rating'))->with('success', 'Successfully to Add New Rating!');
        } else {
            return redirect(route('rating'))->with('failed', 'Failed to Add New Rating!');
        }

        // SINTAXT SQL TO VALIDATION SUCCESS OR FAILED
        // SELECT authors.*, COALESCE(SUM(ratings.rating), 0) AS total_rating
        // FROM authors
        // LEFT JOIN books ON authors.id = books.authors_id
        // LEFT JOIN ratings ON books.id = ratings.books_id
        // WHERE authors.username = 'Darion Ondricka'
        // GROUP BY authors.id;
    }
}
