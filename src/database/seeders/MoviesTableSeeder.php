<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'description' => 'A mind-bending thriller about dreams within dreams.',
                'imdb_rating' => 8.8,
                'language' => 'English',
                'country' => 'USA',
                'genre' => 'Sci-Fi',
                'release_year' => 2010,
                'thumbnail' => 'inception_thumb.jpg',
                'image' => 'inception_main.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spirited Away',
                'description' => 'A young girl enters a magical world ruled by spirits.',
                'imdb_rating' => 8.6,
                'language' => 'Japanese',
                'country' => 'Japan',
                'genre' => 'Animation',
                'release_year' => 2001,
                'thumbnail' => 'spirited_thumb.jpg',
                'image' => 'spirited_main.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
