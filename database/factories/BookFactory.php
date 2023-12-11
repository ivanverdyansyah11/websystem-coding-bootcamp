<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author as Author;
use App\Models\Category as Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'authors_id' => fake()->numberBetween(1, 1000),
            'categories_id' => fake()->numberBetween(1, 3000),
            'ISBN' => fake()->isbn13(),
            'genre' => fake()->word(),
            'publisher' => fake()->company(),
            'language' => fake()->languageCode(),
            'total_pages' => fake()->numberBetween(100, 1000),
            'available_copies' => fake()->numberBetween(1, 100),
        ];
    }
}
