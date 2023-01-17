<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([
            'movie_director' => 'Jon Watts',
            'directed_movie'=> 'Spiderman No Way Home',
        ]);

        DB::table('directors')->insert([
            'movie_director' => 'Ryan Coogler',
            'directed_movie'=> 'Black Panther: Wakanda Forever',
        ]);

        DB::table('directors')->insert([
            'movie_director' => 'Jaume Collet-Serra',
            'directed_movie'=> 'Black Adam',
        ]);

        DB::table('directors')->insert([
            'movie_director' => 'Tim Burton',
            'directed_movie'=> 'Wednesday',
        ]);

        DB::table('directors')->insert([
            'movie_director' => 'Makoto Shinkai',
            'directed_movie'=> 'Tenki no Ko',
        ]);
    }
}
