<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'movie_title'=> 'Spiderman No Way Home',
            'movie_desc' => 'With Spider-Man\'s identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.',
            'movie_release' => '2021-12-13',
            'movie_image' => 'https://pics.filmaffinity.com/Spider_Man_No_Way_Home-642739124-large.jpg',
            'movie_bgimage' => 'https://images4.alphacoders.com/119/1197094.jpg',
        ]);

        DB::table('movies')->insert([
            'movie_title'=> 'Black Panther: Wakanda Forever',
            'movie_desc' => 'Queen Ramonda, Shuri, M\'Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T\'Challa\'s death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and Everett Ross to forge a new path for their beloved kingdom.',
            'movie_release' => '2022-11-9',
            'movie_image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3b/Black_Panther_Wakanda_Forever_poster.jpg/220px-Black_Panther_Wakanda_Forever_poster.jpg',
            'movie_bgimage' => 'https://www.koimoi.com/wp-content/new-galleries/2022/11/black-panther-wakanda-forever-box-office-day-6-early-trends-it-continues-to-stay-consistent-but-is-it-enough-read-on-001.jpg',
        ]);

        DB::table('movies')->insert([
            'movie_title'=> 'Black Adam',
            'movie_desc' => 'In ancient Kahndaq, Teth Adam was bestowed the almighty powers of the gods. After using these powers for vengeance, he was imprisoned, becoming Black Adam. Nearly 5,000 years have passed, and Black Adam has gone from man to myth to legend. Now free, his unique form of justice, born out of rage, is challenged by modern-day heroes who form the Justice Society: Hawkman, Dr. Fate, Atom Smasher and Cyclone.',
            'movie_release' => '2022-10-19',
            'movie_image' => 'https://m.media-amazon.com/images/M/MV5BYzZkOGUwMzMtMTgyNS00YjFlLTg5NzYtZTE3Y2E5YTA5NWIyXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg',
            'movie_bgimage' => 'https://4kwallpapers.com/images/wallpapers/black-adam-2022-movies-dwayne-johnson-dc-comics-dc-4480x2520-8729.jpg',
        ]);

        DB::table('movies')->insert([
            'movie_title'=> 'Wednesday',
            'movie_desc' => 'Wednesday Addams is expelled from her school after dumping live piranhas into the school\'s pool in retaliation for the boys\' water polo team bullying her brother, Pugsley. Consequently, her parents, Gomez and Morticia Addams, enroll her at their high school alma mater, Nevermore Academy, a private school for monstrous outcasts, in the town of Jericho, Vermont. Wednesday\'s cold, emotionless personality and her defiant nature make it difficult for her to connect with her schoolmates and cause her to run afoul of the school\'s principal. However, she discovers she has inherited her mother\'s psychic abilities which allow her to solve a local murder mystery.',
            'movie_release' => '2022-11-23',
            'movie_image' => 'https://m.media-amazon.com/images/M/MV5BM2ZmMjEyZmYtOGM4YS00YTNhLWE3ZDMtNzQxM2RhNjBlODIyXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg',
            'movie_bgimage' => 'https://static.republika.co.id/uploads/images/inpicture_slide/_221213115417-436.jpg',
        ]);

        DB::table('movies')->insert([
            'movie_title'=> 'Tenki no Ko',
            'movie_desc' => 'Tokyo is currently experiencing rain showers that seem to disrupt the usual pace of everyone living there to no end. Amidst this seemingly eternal downpour arrives the runaway high school student Hodaka Morishima, who struggles to financially support himself—ending up with a job at a small-time publisher. At the same time, the orphaned Hina Amano also strives to find work to sustain herself and her younger brother. Both fates intertwine when Hodaka attempts to rescue Hina from shady men, deciding to run away together. Subsequently, Hodaka discovers that Hina has a strange yet astounding power: the ability to call out the sun whenever she prays for it. With Tokyo\'s unusual weather in mind, Hodaka sees the potential of this ability. He suggests that Hina should become a "sunshine girl"—someone who will clear the sky for people when they need it the most. Things begin looking up for them at first. However, it is common knowledge that power always comes with a hefty price...', 
            'movie_release' => '2019-8-21',
            'movie_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSta2mXOxPyDZXdpURdbwrhuplK2d8CoU5Wo9ZY9d_GZsgaeOmZ',
            'movie_bgimage' => 'https://cdn-2.tstatic.net/tribunnews/foto/bank/images/film-weathering-with-you.jpg',
        ]);
    }
}
