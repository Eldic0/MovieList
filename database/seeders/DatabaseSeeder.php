<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            adminSeeder::class,
            MovieSeeder::class,
            ActorSeeder::class,
            GenreSeeder::class,
            WatchendListSeeder::class,
            AliasSeeder::class,
            DirectorSeeder::class,
        ]);
    }
}
