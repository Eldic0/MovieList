<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AliasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aliases')->insert([
            'alias' => 'Peter Parker - I',
            'alias_actor'=> 'Tom Holland',
            'alias_movie'=> 'Spiderman No Way Home',
            'alias_genre'=> 'Action',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Peter Parker - II',
            'alias_actor'=> 'Tobey Maguire',
            'alias_movie'=> 'Spiderman No Way Home',
            'alias_genre'=> 'Action',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Shuri',
            'alias_actor'=> 'Letitia Wright',
            'alias_movie'=> 'Black Panther: Wakanda Forever',
            'alias_genre'=> 'Action',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Queen Ramonda',
            'alias_actor'=> 'Angela Bassett',
            'alias_movie'=> 'Black Panther: Wakanda Forever',
            'alias_genre'=> 'Action',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Teth Adam',
            'alias_actor'=> 'Dwayne Johnson',
            'alias_movie'=> 'Black Adam',
            'alias_genre'=> 'Superhero',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Dr. Fate',
            'alias_actor'=> 'Pierce Brosnan',
            'alias_movie'=> 'Black Adam',
            'alias_genre'=> 'Superhero',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Wednesday Addams',
            'alias_actor'=> 'Jenna Ortega',
            'alias_movie'=> 'Wednesday',
            'alias_genre'=> 'Horror',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Gomez Addams',
            'alias_actor'=> 'Luiz Guzman',
            'alias_movie'=> 'Wednesday',
            'alias_genre'=> 'Horror',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Hina Amano',
            'alias_actor'=> 'Nana Mori',
            'alias_movie'=> 'Tenki no Ko',
            'alias_genre'=> 'Anime',
        ]);

        DB::table('aliases')->insert([
            'alias' => 'Hodaka Morishima',
            'alias_actor'=> 'Kotaro Daigo',
            'alias_movie'=> 'Tenki No Ko',
            'alias_genre'=> 'Anime',
        ]);
    }
}
