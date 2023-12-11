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
            'title' => fake()->sentence(3),
            'authors_id' => function () {
                return Author::inRandomOrder()->first()->id;
            },
            'categories_id' => function () {
                return Category::inRandomOrder()->first()->id;
            },
            'genre' => fake()->sentence(2),
            'publisher' => fake()->dateTime(),
            'language' => fake()->timezone(),
            'total_pages' => fake()->numberBetween(100, 500),
            'available_copies' => fake()->numberBetween(1, 50),
        ];
    }
}
