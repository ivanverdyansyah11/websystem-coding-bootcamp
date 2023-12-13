<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Book as Book;
use \App\Models\Author as Author;
use \App\Models\Category as Category;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $authors = collect(Author::all()->modelKeys());
        $categories = collect(Category::all()->modelKeys());

        for ($i=0; $i < 100000; $i++) { 
            $data[] = [
                'title' => fake()->sentence(3),
                'authors_id' => $authors->random(),
                'categories_id' => $categories->random(),
                'genre' => fake()->sentence(2),
                'publisher' => fake()->dateTime(),
                'language' => fake()->timezone(),
                'total_pages' => fake()->numberBetween(100, 500),
                'available_copies' => fake()->numberBetween(1, 50),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }

        $chunks = array_chunk($data, 1000);
        foreach ($chunks as $chunk) {
            Book::insert($chunk);
        }
    }
}
