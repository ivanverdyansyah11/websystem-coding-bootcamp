<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author as Author;
use App\Models\Book;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'books_id' => function () {
                return Book::inRandomOrder()->first()->id;
            },
            'rating' => fake()->numberBetween(1, 10),
        ];
    }
}
