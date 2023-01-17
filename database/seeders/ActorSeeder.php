<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            'actor_name' => 'Tom Holland',
            'gender' => 'Male',
            'biography' => 'Thomas Stanley Holland was born in Kingston-upon-Thames, Surrey, to Nicola Elizabeth (Frost), a photographer, and Dominic Holland (Dominic Anthony Holland), who is a comedian and author. His paternal grandparents were from the Isle of Man and Ireland, respectively. He lives with his parents and three younger brothers - Paddy and twins Sam and Harry. Tom attended Donhead Prep School. Then, after a successful eleven plus exam, he became a pupil at Wimbledon College. Having successfully completed his GCSEs, in September 2012 Tom started a two-year course in the BRIT School for Performing Arts & Technology notable for its numerous famous alumni. As one of the most promising young actors, Holland was featured in Screen International\'s UK Stars of Tomorrow - 2012 and in Variety\'s Youth Impact Report 2012". Holland has been signed up by William Morris Endeavor (WME) global talent agency and is represented by Curtis Brown literary and talent agency.',
            'actor_birthday' => '1996-6-1',
            'birthplace' => 'Kingston upon Thames, England, UK',
            'actor_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Tom_Holland_by_Gage_Skidmore.jpg/1200px-Tom_Holland_by_Gage_Skidmore.jpg',
            'popularity' => '40.31',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Tobey Maguire',
            'gender' => 'Male',
            'biography' => 'Tobias Vincent Maguire was born in Santa Monica, California. His parents were 18 and 20, and not yet married, when he was born. His mother, Wendy (Brown), did advertising, publicity, and acting in Hollywood for years as she coached and managed Tobey. His father, Vincent Maguire, was a cook and sometimes a construction worker. Tobey did not finish high school in order to pursue and focus on acting roles, but he did end up getting his GED. He did several commercials (he was a model dancer for Nordstrom by age six), and he had some roles on various TV shows before landing a starring role on the Fox comedy Great Scott! (1992). That role lasted nine weeks before the show was canceled. Fox-made series were not doing well in general at the time. He avoids drugs and alcohol, and his best friend is Leonardo DiCaprio. Tobey is a vegan and studies yoga. He now has two beautiful children with his wife Jennifer Meyer Maguire. Their names are Ruby Sweetheart and Otis Tobias Maguire. Another little known fact is that his two half-brothers, Jopaul and Weston Epp, were the child actors who handed Tobey (Peter Parker) his mask after the train scene in Spider-Man 2.',
            'actor_birthday' => '1975-6-27',
            'birthplace' => 'Santa Monica, California, USA',
            'actor_image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c2/Tobey_Maguire_2014.jpg',
            'popularity' => '36.19',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Letitia Wright',
            'gender' => 'Female',
            'biography' => 'With a career spanning over a decade, Emmy-nominated Letitia Wright has cemented her position as one of the industry\'s most captivating young actresses. From her breakout role as ambitious Summerhouse resident Chantelle in Top Boy, to her critically acclaimed performance as Nish in Black Mirror, not forgetting her scene-stealing turn as Shuri - lead scientist and Princess of Wakanda in Black Panther, Wright has played an integral role in what are arguably the most culture defining projects of the last ten years and whose impact is still felt to this day.',
            'actor_birthday' => '1993-10-31',
            'birthplace' => 'Georgetown, Guyana',
            'actor_image' => 'https://cdn.gracza.pl/galeria/mdb/o/438988109.jpg',
            'popularity' => '34.89',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Angela Bassett',
            'gender' => 'Female',
            'biography' => 'Angela Evelyn Bassett (born August 16, 1958) is an American actress. She had her breakthrough with her portrayal of singer Tina Turner in the biopic What\'s Love Got to Do with It (1993), which garnered her a nomination for the Academy Award for Best Actress. She went on to star in numerous acclaimed and successful films, including as Betty Shabazz in both Malcolm X (1992) and Panther (1995), as Katherine Jackson in The Jacksons: An American Dream (1992), as Voletta Wallace in Notorious (2009), as Amanda Waller in Green Lantern (2011), and as Coretta Scott King in Betty & Coretta (2013).',
            'actor_birthday' => '1958-8-16',
            'birthplace' => 'New York City, New York, U.S.',
            'actor_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Angela_Bassett_by_Gage_Skidmoe.jpg/330px-Angela_Bassett_by_Gage_Skidmoe.jpg',
            'popularity' => '34.12',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Dwayne Johnson',
            'gender' => 'Male',
            'biography' => 'Dwayne Douglas Johnson, also known as The Rock, was born on May 2, 1972 in Hayward, California. He is the son of Ata Johnson (born Feagaimaleata Fitisemanu Maivia) and professional wrestler Rocky Johnson (born Wayde Douglas Bowles). His father, from Amherst, Nova Scotia, Canada, is black (of Black Nova Scotian descent), and his mother is of Samoan background (her own father was Peter Fanene Maivia, also a professional wrestler). While growing up, Dwayne traveled around a lot with his parents and watched his father perform in the ring. During his high school years, Dwayne began playing football and he soon received a full scholarship from the University of Miami, where he had tremendous success as a football player. In 1995, Dwayne suffered a back injury which cost him a place in the NFL. He then signed a three-year deal with the Canadian League but left after a year to pursue a career in wrestling.',
            'actor_birthday' => '1972-5-2',
            'birthplace' => 'Hayward, California, USA',
            'actor_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Dwayne_Johnson_2014_%28cropped%29.jpg/640px-Dwayne_Johnson_2014_%28cropped%29.jpg',
            'popularity' => '38.72',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Pierce Brosnan',
            'gender' => 'Male',
            'biography' => 'Pierce Brendan Brosnan was born in Drogheda, County Louth, Ireland, to May (Smith), a nurse, and Thomas Brosnan, a carpenter. He lived in Navan, County Meath, until he moved to England, UK, at an early age (thus explaining his ability to play men from both backgrounds convincingly). His father left the household when Pierce was a child and although reunited later in life, the two have never had a close relationship. His most popular role is that of British secret agent James Bond. The death, in 1991, of Cassandra Harris, his wife of eleven years, left him with three children - Christopher and Charlotte from Cassandra\'s first marriage and Sean from their marriage. Since her death, he has had two children with his second wife, Keely Shaye Brosnan.',
            'actor_birthday' => '1953-5-16',
            'birthplace' => 'Drogheda, County Louth, Ireland',
            'actor_image' => 'https://www.themoviedb.org/t/p/w500/dzXVwwJLPwiZeXOnf7YxorqVEEM.jpg',
            'popularity' => '37.10',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Jenna Ortega',
            'gender' => 'Female',
            'biography' => 'Jenna Marie Ortega was born on September 27, 2002, in Coachella Valley, California. Jenna began acting at the age of nine and has portrayed the role of Harley, a creative engineering prodigy navigating life as the middle child in a family of seven children, in "Stuck in the Middle," a Disney Channel series told from Harley\'s perspective. Ortega is known not only for her stellar performance in multiple Disney productions but for her roles in many award-winning movies and television series\', such as her portrayal of Young Jane in The CW Television Network\'s iconic comedy-drama "Jane the Virgin," and Darcy in the 2015 Netflix sitcom, "Richie Rich." In 2020, she co-starred as Phoebe in the horror sequel The Babysitter: Killer Queen (2020). Restless in her profession, Jenna is accountable for more than 15 television staples and blockbuster films to date, commonly accepting lead roles.',
            'actor_birthday' => '2002-9-27',
            'birthplace' => 'Coachella Valley, California, USA',
            'actor_image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Jenna_Ortega_2022_%28cropped%29.jpg',
            'popularity' => '35.10',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Luiz Guzman',
            'gender' => 'Male',
            'biography' => 'Actor of Puerto Rican descent who gained fame making many memorable films in the 1980s and 1990s due to his villainous physical appearance. Guzmán was born in Cayey, Puerto Rico on August 28, 1956 and raised in New York City\'s Greenwich Village and the surrounding Lower East Side neighborhood. His mother Rosa worked in a hospital and Benjamin Cardona, his stepfather, was a TV repairman. Guzman presently resides in Vermont with his wife and kids.',
            'actor_birthday' => '1956-8-28',
            'birthplace' => 'Cayey, Puerto Rico',
            'actor_image' => 'https://flxt.tmsimg.com/assets/76754_v9_ba.jpg',
            'popularity' => '31.13',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Nana Mori',
            'gender' => 'Female',
            'biography' => 'Nana Mori was born on August 31, 2001 in Osaka, Japan. She is an actress, known for Weathering with You (2019), Kimi wa Hokago Insomnia and Mr. Hiiragi\'s Homeroom (2019).',
            'actor_birthday' => '2001-8-31',
            'birthplace' => 'Osaka, Japan',
            'actor_image' => 'https://asianwiki.com/images/a/a5/Nana_Mori-2001-p1.jpg',
            'popularity' => '32.76',
        ]);

        DB::table('actors')->insert([
            'actor_name' => 'Kotaro Daigo',
            'gender' => 'Male',
            'biography' => 'Kotaro Daigo (醍醐 虎汰朗, Daigo Kotarō, September 1, 2000) is a Japanese actor from Tokyo. He is affiliated with A-Light. In the audition for the feature-length animated movie Weathering with You, directed by Makoto Shinkai and released in 2019, he was selected as the main character, Hodaka Morishima, from among 2000 people. In 2020, he won the New Actor Award at the 14th Voice Actor Awards.',
            'actor_birthday' => '2000-9-1',
            'birthplace' => 'Tokyo, Japan',
            'actor_image' => 'https://asianwiki.com/images/6/63/Kotaro_Daigo-2000-p1.jpg',
            'popularity' => '31.71',
        ]);
    }
}
