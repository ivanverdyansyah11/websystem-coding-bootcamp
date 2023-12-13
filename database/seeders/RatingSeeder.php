<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $books = collect(Book::all()->modelKeys());

        for ($i=0; $i < 500000; $i++) { 
            $data[] = [
                'books_id' => $books->random(),
                'rating' => fake()->numberBetween(1, 10),
            ];
        }

        $chunks = array_chunk($data, 1000);
        foreach ($chunks as $chunk) {
            Rating::insert($chunk);
        }
    }
}
