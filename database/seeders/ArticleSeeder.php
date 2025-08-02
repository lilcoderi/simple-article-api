<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {
            Article::create([
                'title' => "Sample Article $i",
                'content' => Str::random(100),
                'author' => "Author $i",
                'category_id' => fake()->randomElement($categoryIds),
            ]);
        }
    }
}
