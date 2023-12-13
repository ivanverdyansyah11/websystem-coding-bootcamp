<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Author as Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 1000; $i++) { 
            $data[] = [
                'username' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => fake()->password(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }

        $chunks = array_chunk($data, 500);
        foreach ($chunks as $chunk) {
            Author::insert($chunk);
        }
    }
}
