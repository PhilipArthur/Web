<?php

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
            'genre_id' => 1,
            'title' => "The World of The Married",
            'photo' => "TWOTM.jpg",
            'description' => 'Ji Sun Woo is an associate director of a family clinic with a perfect life—a great career, married to a handsome, young-looking man, mother to an adoring son, and surrounded by seemingly caring friends.',
            'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 1,
                'title' => "Descendants of the Sun",
                'photo' => "DOTS.jpg",
                'description' => 'A drama about the love of people who get closer as they learn to be considerate of each other in desperate times and sacrifices made by people who throw themselves into natural disasters.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 1,
                'title' => "Crash Landing On You",
                'photo' => "CrashLanding.jpg",
                'description' => 'A paragliding mishap drops a South Korean heiress in North Korea -- and into the life of an army officer, who decides he will help her hide.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 1,
                'title' => "My Holo Love",
                'photo' => "MyHolo.jpg",
                'description' => 'Go Nan Do, the owner, and creator of an IT research company must hide his existence from the world after his involvement as a hacker in a major case ten years ago. Presumed dead, the only people who knew of his existence are his step-sister and his companies CEO. Han So Yeon, an assistant manager at a glasses company, keeps her distance from people, due to her inability to recognize people’s faces.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 1,
                'title' => "Itaewon Class",
                'photo' => "Itaewon.jpg",
                'description' => 'In a colorful Seoul neighborhood, an ex-con and his friends fight a mighty foe to make their ambitious dreams for their street bar a reality.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 1,
                'title' => "It's Okay to Not Be Okay",
                'photo' => "IOTBNO.jpg",
                'description' => 'Desperate to escape from his emotional baggage and the heavy responsibility he’s had all his life, a psychiatric ward worker begins to heal with help from the unexpected—a woman who writes fairy tales but doesn’t believe in them.',
                'rating' => '5'
            ]);

            //===================================================== KIDS===============================//

            DB::table('movies')->insert([
                'genre_id' => 3,
                'title' => "The Good Doctor",
                'photo' => "GoodDoctor.jpg",
                'description' => 'A young surgeon with Savant syndrome is recruited into the surgical unit of a prestigious hospital. The question will arise: can a person who doesnt have the ability to relate to people actually save their lives?',
            'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 3,
                'title' => "The Boys",
                'photo' => "TheBoys.jpg",
                'description' => 'A group of vigilantes known informally as “The Boys” set out to take down corrupt superheroes with no more than blue-collar grit and a willingness to fight dirty.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 3,
                'title' => "Queen's Gambit",
                'photo' => "QueenGambit.jpg",
                'description' => 'In a Kentucky orphanage in the 1950s, a young girl discovers an astonishing talent for chess while struggling with addiction.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 3,
                'title' => "Grey's Anatomy",
                'photo' => "GreyAnatomy.jpg",
                'description' => 'Follows the personal and professional lives of a group of doctors at Seattle’s Grey Sloan Memorial Hospital.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 3,
                'title' => "The Simpsons",
                'photo' => "TheSimpsons.jpg",
                'description' => 'Set in Springfield, the average American town, the show focuses on the antics and everyday adventures of the Simpson family; Homer, Marge, Bart, Lisa and Maggie, as well as a virtual cast of thousands. Since the beginning, the series has been a pop culture icon, attracting hundreds of celebrities to guest star. The show has also made name for itself in its fearless satirical take on politics, media and American life in general.',
                'rating' => '5'
            ]);

            
            DB::table('movies')->insert([
                'genre_id' => 3,
                'title' => "The Umbrella Academy",
                'photo' => "UmbrellaAcademy.jpg",
                'description' => 'A dysfunctional family of superheroes comes together to solve the mystery of their fathers death, the threat of the apocalypse and more.',
                'rating' => '5'
            ]);

            //============================================== TV SHOW ===========================================//

            DB::table('movies')->insert([
                'genre_id' => 2,
                'title' => "Frozen",
                'photo' => "Frozen.jpg",
                'description' => 'Young princess Anna of Arendelle dreams about finding true love at her sister Elsa’s coronation. Fate takes her on a dangerous journey in an attempt to end the eternal winter that has fallen over the kingdom. Shes accompanied by ice delivery man Kristoff, his reindeer Sven, and snowman Olaf. On an adventure where she will find out what friendship, courage, family, and true love really means.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 2,
                'title' => "Stand By Me",
                'photo' => "Doraemon.jpg",
                'description' => 'In the suburbs of Tokyo some time ago, there lived a clumsy boy about 10 years old. There appeared in front of him named Sewashi, Nobitas descendant of four generations later from the 22nd century, and Doraemon, a 22nd century cat-type caretaker robot who helps people with its secret gadgets.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 2,
                'title' => "Despicable Me 3",
                'photo' => "Minion.jpg",
                'description' => 'Gru and his wife Lucy must stop former 80s child star Balthazar Bratt from achieving world domination.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 2,
                'title' => "The Spongebob Movie",
                'photo' => "Spongebob.jpg",
                'description' => 'When his best friend Gary is suddenly snatched away, SpongeBob takes Patrick on a madcap mission far beyond Bikini Bottom to save their pink-shelled pal.',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 2,
                'title' => "How to Train Your Dragon",
                'photo' => "HTTYD.jpg",
                'description' => 'As the son of a Viking leader on the cusp of manhood, shy Hiccup Horrendous Haddock III faces a rite of passage: he must kill a dragon to prove his warrior mettle. But after downing a feared dragon, he realizes that he no longer wants to destroy it, and instead befriends the beast – which he names Toothless – much to the chagrin of his warrior father',
                'rating' => '5'
            ]);

            DB::table('movies')->insert([
                'genre_id' => 2,
                'title' => "Tom & Jerry Kids Show",
                'photo' => "T&J.jpg",
                'description' => 'Tom and Jerry in their childhood days, playing cat-and-mouse games even then.',
                'rating' => '5'
            ]);
    }
}
