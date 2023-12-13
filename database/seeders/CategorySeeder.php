<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category as Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 3000; $i++) { 
            $data[] = [
                'name' => fake()->words(2, true),
                'description' => fake()->text(50),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }

        $chunks = array_chunk($data, 1000);
        foreach ($chunks as $chunk) {
            Category::insert($chunk);
        }
    }
}
