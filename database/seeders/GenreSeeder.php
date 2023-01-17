<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'movie_genre' => 'Action',
        ]);

        DB::table('genres')->insert([
            'movie_genre' => 'Comedy',
        ]);

        DB::table('genres')->insert([
            'movie_genre' => 'Romance',
        ]);

        DB::table('genres')->insert([
            'movie_genre' => 'Anime',
        ]);

        DB::table('genres')->insert([
            'movie_genre' => 'Horror',
        ]);

        DB::table('genres')->insert([
            'movie_genre' => 'Superhero',
        ]);
    }
}
