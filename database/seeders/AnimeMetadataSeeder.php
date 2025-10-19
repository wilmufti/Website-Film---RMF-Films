<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeMetadataSeeder extends Seeder
{
    public function run()
    {
        DB::table('anime_metadata')->insert([
            [
                'anime_name' => '5 Centimeters per Second',
                'source' => 'movies',
                'description' => 'A tale of love and distance following the lives of two friends growing apart over the years.',
                'genres' => 'Romance,Drama,Slice of Life',
                'characters' => json_encode([
                    ["name" => "Takaki Tono", "image_url" => "https://cdn.myanimelist.net/images/characters/10/56152.jpg", "voice_actor" => "Kenji Mizuhashi"],
                    ["name" => "Akari Shinohara", "image_url" => "https://cdn.myanimelist.net/images/characters/6/56151.jpg", "voice_actor" => "Yoshimi Kondou"],
                    ["name" => "Kanae Sumida", "image_url" => "https://cdn.myanimelist.net/images/characters/5/138139.jpg", "voice_actor" => "Satomi Hanamura"]
                ]),
            ],
            [
                'anime_name' => 'Attack on Titan',
                'source' => 'films',
                'description' => 'Mankind fights for survival against giant humanoid Titans. Eren Yeager joins the Scout Regiment to uncover the truth and seek revenge.',
                'genres' => 'Action,Dark fantasy,Drama',
                'characters' => json_encode([
                    ["name" => "Eren Yeager", "image_url" => "https://cdn.myanimelist.net/images/characters/10/216895.jpg", "voice_actor" => "Yuki Kaji"],
                    ["name" => "Mikasa Ackerman", "image_url" => "https://cdn.myanimelist.net/images/characters/9/215563.jpg", "voice_actor" => "Yui Ishikawa"],
                    ["name" => "Armin Arlert", "image_url" => "https://cdn.myanimelist.net/images/characters/8/220267.jpg", "voice_actor" => "Marina Inoue"]
                ]),
            ],
            [
                'anime_name' => 'Black Clover',
                'source' => 'films',
                'description' => 'Asta, a boy born without magic, aims to become the Wizard King with the help of his anti-magic powers.',
                'genres' => 'Action,Fantasy,Adventure',
                'characters' => json_encode([
                    ["name" => "Asta", "image_url" => "https://cdn.myanimelist.net/images/characters/8/312836.jpg", "voice_actor" => "Gakuto Kajiwara"],
                    ["name" => "Yuno", "image_url" => "https://cdn.myanimelist.net/images/characters/6/318765.jpg", "voice_actor" => "Nobunaga Shimazaki"],
                    ["name" => "Noelle Silva", "image_url" => "https://cdn.myanimelist.net/images/characters/14/338844.jpg", "voice_actor" => "Kana Yuki"]
                ]),
            ],
            [
                'anime_name' => 'Bleach: Thousand-Year Blood War',
                'source' => 'films',
                'description' => 'Ichigo Kurosaki faces the Quincy army in a full-scale war as secrets about Soul Society are unveiled.',
                'genres' => 'Action,Supernatural,Shounen',
                'characters' => json_encode([
                    ["name" => "Ichigo Kurosaki", "image_url" => "https://cdn.myanimelist.net/images/characters/3/512788.jpg", "voice_actor" => "Masakazu Morita"],
                    ["name" => "Rukia Kuchiki", "image_url" => "https://cdn.myanimelist.net/images/characters/2/78215.jpg", "voice_actor" => "Fumiko Orikasa"],
                    ["name" => "Uryu Ishida", "image_url" => "https://cdn.myanimelist.net/images/characters/16/139189.jpg", "voice_actor" => "Noriaki Sugiyama"]
                ]),
            ],
            [
                'anime_name' => 'Blue Lock',
                'source' => 'films',
                'description' => 'Setelah Jepang kalah di Piala Dunia, proyek Blue Lock dimulai untuk mencari striker egois terbaik. Yoichi Isagi bersaing dalam kompetisi berisiko tinggi.',
                'genres' => 'Sports,Psychological,Drama',
                'characters' => json_encode([
                    ["name" => "Yoichi Isagi", "image_url" => "https://cdn.myanimelist.net/images/characters/6/558080.jpg", "voice_actor" => "Kazuki Ura"],
                    ["name" => "Meguru Bachira", "image_url" => "https://cdn.myanimelist.net/images/characters/14/491180.jpg", "voice_actor" => "Tasuku Kaito"],
                    ["name" => "Rin Itoshi", "image_url" => "https://cdn.myanimelist.net/images/characters/11/498288.jpg", "voice_actor" => "Yuma Uchida"]
                ]),
            ],
            [
                'anime_name' => 'Chainsaw Man',
                'source' => 'films',
                'description' => 'Denji, seorang pemuda miskin, menjadi pemburu iblis untuk melunasi utangnya. Setelah dikhianati dan dibunuh, ia bersatu dengan iblis peliharaannya, Pochita, dan dihidupkan kembali sebagai Chainsaw Man.',
                'genres' => 'Action,Dark fantasy,Horror',
                'characters' => json_encode([
                    ["name" => "Denji", "image_url" => "https://cdn.myanimelist.net/images/characters/3/492407.jpg", "voice_actor" => "Kikunosuke Toya"],
                    ["name" => "Power", "image_url" => "https://cdn.myanimelist.net/images/characters/7/494969.jpg", "voice_actor" => "Ai Fairouz"],
                    ["name" => "Aki Hayakawa", "image_url" => "https://cdn.myanimelist.net/images/characters/13/395003.jpg", "voice_actor" => "Shogo Sakata"]
                ]),
            ],
            [
                'anime_name' => 'Children Who Chase Lost Voices',
                'source' => 'movies',
                'description' => 'A girl journeys to a mysterious world to say goodbye to a lost loved one and discovers its many secrets.',
                'genres' => 'Adventure,Fantasy,Drama',
                'characters' => json_encode([
                    ["name" => "Asuna Watase", "image_url" => "https://cdn.myanimelist.net/images/characters/7/145347.jpg", "voice_actor" => "Hisako Kanemoto"],
                    ["name" => "Shun", "image_url" => "https://cdn.myanimelist.net/images/characters/7/145369.jpg", "voice_actor" => "Miyu Irino"],
                    ["name" => "Ryuuji Morisaki", "image_url" => "https://cdn.myanimelist.net/images/characters/3/145363.jpg", "voice_actor" => "Kazuhiko Inoue"]
                ]),
            ],
            [
                'anime_name' => 'Clannad: After Story',
                'source' => 'tv_series',
                'description' => 'Following the events of Clannad, Tomoya and Nagisa face life challenges as they start a family and learn about hardship and hope.',
                'genres' => 'Drama,Romance,Slice of Life',
                'characters' => json_encode([
                    ["name" => "Tomoya Okazaki", "image_url" => "https://cdn.myanimelist.net/images/characters/6/508343.jpg", "voice_actor" => "Yuichi Nakamura"],
                    ["name" => "Nagisa Furukawa", "image_url" => "https://cdn.myanimelist.net/images/characters/3/300961.jpg", "voice_actor" => "Mai Nakahara"],
                    ["name" => "Ushio Okazaki", "image_url" => "https://cdn.myanimelist.net/images/characters/12/48244.jpg", "voice_actor" => "Ai Nonaka"]
                ]),
            ],
            [
                'anime_name' => 'Death Note',
                'source' => 'films',
                'description' => 'A student discovers a notebook that allows him to kill anyone by writing their name and seeks to rid the world of evil.',
                'genres' => 'Psychological,Thriller,Supernatural',
                'characters' => json_encode([
                    ["name" => "Light Yagami", "image_url" => "https://cdn.myanimelist.net/images/characters/6/63870.jpg", "voice_actor" => "Mamoru Miyano"],
                    ["name" => "L", "image_url" => "https://cdn.myanimelist.net/images/characters/10/249647.jpg", "voice_actor" => "Kappei Yamaguchi"],
                    ["name" => "Ryuk", "image_url" => "https://cdn.myanimelist.net/images/characters/10/59125.jpg", "voice_actor" => "Shido Nakamura"]
                ]),
            ],
            [
                'anime_name' => 'Demon Slayer',
                'source' => 'films',
                'description' => 'Tanjiro Kamado becomes a demon slayer after his family is slaughtered and his sister Nezuko is turned into a demon.',
                'genres' => 'Action,Supernatural,Dark fantasy',
                'characters' => json_encode([
                    ["name" => "Tanjiro Kamado", "image_url" => "https://cdn.myanimelist.net/images/characters/6/386735.jpg", "voice_actor" => "Natsuki Hanae"],
                    ["name" => "Nezuko Kamado", "image_url" => "https://cdn.myanimelist.net/images/characters/2/378254.jpg", "voice_actor" => "Akari Kitō"],
                    ["name" => "Zenitsu Agatsuma", "image_url" => "https://cdn.myanimelist.net/images/characters/10/459689.jpg", "voice_actor" => "Hiro Shimono"]
                ]),
            ],
            [
                'anime_name' => 'Dragon Ball Z',
                'source' => 'films',
                'description' => 'Goku defends Earth against powerful foes including Vegeta, Frieza, Cell, and Majin Buu, with help from friends and family.',
                'genres' => 'Action,Martial Arts,Sci-Fi',
                'characters' => json_encode([
                    ["name" => "Goku", "image_url" => "https://cdn.myanimelist.net/images/characters/15/72546.jpg", "voice_actor" => "Masako Nozawa"],
                    ["name" => "Vegeta", "image_url" => "https://cdn.myanimelist.net/images/characters/14/86185.jpg", "voice_actor" => "Ryo Horikawa"],
                    ["name" => "Gohan", "image_url" => "https://cdn.myanimelist.net/images/characters/2/72715.jpg", "voice_actor" => "Masako Nozawa"]
                ]),
            ],
            [
                'anime_name' => 'Frieren: Beyond Journey’s End',
                'source' => 'films',
                'description' => 'Setelah mengalahkan Raja Iblis, penyihir elf Frieren memulai perjalanan untuk memahami waktu, manusia, dan kehilangan.',
                'genres' => 'Adventure,Fantasy,Drama',
                'characters' => json_encode([
                    ["name" => "Frieren", "image_url" => "https://cdn.myanimelist.net/images/characters/7/525105.jpg", "voice_actor" => "Atsumi Tanezaki"],
                    ["name" => "Fern", "image_url" => "https://cdn.myanimelist.net/images/characters/13/519083.jpg", "voice_actor" => "Kana Ichinose"],
                    ["name" => "Stark", "image_url" => "https://cdn.myanimelist.net/images/characters/2/523292.jpg", "voice_actor" => "Chiaki Kobayashi"]
                ]),
            ],
            [
                'anime_name' => 'Fullmetal Alchemist: Brotherhood',
                'source' => 'films',
                'description' => 'Two brothers use alchemy in their quest to restore their bodies after a failed attempt to bring their mother back to life.',
                'genres' => 'Action,Adventure,Drama',
                'characters' => json_encode([
                    ["name" => "Edward Elric", "image_url" => "https://cdn.myanimelist.net/images/characters/9/72533.jpg", "voice_actor" => "Romi Park"],
                    ["name" => "Alphonse Elric", "image_url" => "https://cdn.myanimelist.net/images/characters/5/54265.jpg", "voice_actor" => "Rie Kugimiya"],
                    ["name" => "Roy Mustang", "image_url" => "https://cdn.myanimelist.net/images/characters/11/510227.jpg", "voice_actor" => "Shinichiro Miki"]
                ]),
            ],
            [
                'anime_name' => 'Gintama°',
                'source' => 'tv_series',
                'description' => 'The oddball samurai Gintoki and his friends fight against dark forces threatening Edo in this action-packed continuation.',
                'genres' => 'Action,Comedy,Parody',
                'characters' => json_encode([
                    ["name" => "Gintoki Sakata", "image_url" => "https://cdn.myanimelist.net/images/characters/15/241479.jpg", "voice_actor" => "Tomokazu Sugita"],
                    ["name" => "Shinpachi Shimura", "image_url" => "https://cdn.myanimelist.net/images/characters/14/114081.jpg", "voice_actor" => "Daisuke Sakaguchi"],
                    ["name" => "Kagura", "image_url" => "https://cdn.myanimelist.net/images/characters/2/505912.jpg", "voice_actor" => "Rie Kugimiya"]
                ]),
            ],
            [
                'anime_name' => 'Hell’s Paradise',
                'source' => 'films',
                'description' => 'Gabimaru, ninja tak terkalahkan, dikirim ke pulau misterius untuk mencari ramuan keabadian di tengah bahaya mengerikan.',
                'genres' => 'Action,Dark fantasy,Adventure',
                'characters' => json_encode([
                    ["name" => "Gabimaru", "image_url" => "https://cdn.myanimelist.net/images/characters/5/497163.jpg", "voice_actor" => "Chiaki Kobayashi"],
                    ["name" => "Sagiri", "image_url" => "https://cdn.myanimelist.net/images/characters/8/497169.jpg", "voice_actor" => "Yumiri Hanamori"],
                    ["name" => "Yuzuriha", "image_url" => "https://cdn.myanimelist.net/images/characters/9/497164.jpg", "voice_actor" => "Rie Takahashi"]
                ]),
            ],
            [
                'anime_name' => 'Hunter x Hunter (2011)',
                'source' => 'tv_series',
                'description' => 'Gon Freecss becomes a Hunter to find his father and discovers a world full of danger, friends, and powerful enemies.',
                'genres' => 'Action,Adventure,Fantasy',
                'characters' => json_encode([
                    ["name" => "Gon Freecss", "image_url" => "https://cdn.myanimelist.net/images/characters/11/174517.jpg", "voice_actor" => "Megumi Han"],
                    ["name" => "Killua Zoldyck", "image_url" => "https://cdn.myanimelist.net/images/characters/2/327920.jpg", "voice_actor" => "Mariya Ise"],
                    ["name" => "Kurapika", "image_url" => "https://cdn.myanimelist.net/images/characters/3/549312.jpg", "voice_actor" => "Miyuki Sawashiro"]
                ]),
            ],
            [
                'anime_name' => 'Jujutsu Kaisen',
                'source' => 'films',
                'description' => 'Yuji Itadori, seorang siswa SMA, bergabung dengan organisasi rahasia penyihir Jujutsu untuk mengalahkan Kutukan kuat bernama Ryomen Sukuna, yang menjadi inang dalam tubuhnya.',
                'genres' => 'Adventure,Dark fantasy,Supernatural',
                'characters' => json_encode([
                    ["name" => "Yuji Itadori", "image_url" => "https://cdn.myanimelist.net/images/characters/6/467646.jpg", "voice_actor" => "Junya Enoki"],
                    ["name" => "Megumi Fushiguro", "image_url" => "https://cdn.myanimelist.net/images/characters/2/392689.jpg", "voice_actor" => "Yuma Uchida"],
                    ["name" => "Nobara Kugisaki", "image_url" => "https://cdn.myanimelist.net/images/characters/12/422313.jpg", "voice_actor" => "Asami Seto"]
                ]),
            ],
            [
                'anime_name' => 'Kanojo Okarishimasu',
                'source' => 'tv_series',
                'description' => 'A college student rents a girlfriend after being dumped, leading to a web of romantic and awkward situations.',
                'genres' => 'Romance,Comedy,Drama',
                'characters' => json_encode([
                    ["name" => "Kazuya Kinoshita", "image_url" => "https://cdn.myanimelist.net/images/characters/9/396701.jpg", "voice_actor" => "Shun Horie"],
                    ["name" => "Chizuru Mizuhara", "image_url" => "https://cdn.myanimelist.net/images/characters/4/484261.jpg", "voice_actor" => "Sora Amamiya"],
                    ["name" => "Ruka Sarashina", "image_url" => "https://cdn.myanimelist.net/images/characters/11/409385.jpg", "voice_actor" => "Nao Toyama"]
                ]),
            ],
            [
                'anime_name' => 'Mashle',
                'source' => 'films',
                'description' => 'Mash Burnedead, seorang pemuda tanpa sihir, menggunakan kekuatan ototnya untuk bertahan di sekolah sihir elit.',
                'genres' => 'Action,Comedy,Fantasy',
                'characters' => json_encode([
                    ["name" => "Mash Burnedead", "image_url" => "https://cdn.myanimelist.net/images/characters/12/410288.jpg", "voice_actor" => "Chiaki Kobayashi"],
                    ["name" => "Lance Crown", "image_url" => "https://cdn.myanimelist.net/images/characters/10/506220.jpg", "voice_actor" => "Reiji Kawashima"],
                    ["name" => "Dot Barrett", "image_url" => "https://cdn.myanimelist.net/images/characters/15/506221.jpg", "voice_actor" => "Takuya Eguchi"]
                ]),
            ],
            [
                'anime_name' => 'Mob Psycho 100',
                'source' => 'tv_series',
                'description' => 'Shigeo \"Mob\" Kageyama is a powerful esper who suppresses his emotions to keep his psychic powers in check while trying to live a normal life.',
                'genres' => 'Action,Supernatural,Comedy',
                'characters' => json_encode([
                    ["name" => "Shigeo Kageyama", "image_url" => "https://cdn.myanimelist.net/images/characters/6/343344.jpg", "voice_actor" => "Setsuo Itō"],
                    ["name" => "Arataka Reigen", "image_url" => "https://cdn.myanimelist.net/images/characters/16/308364.jpg", "voice_actor" => "Takahiro Sakurai"],
                    ["name" => "Ritsu Kageyama", "image_url" => "https://cdn.myanimelist.net/images/characters/14/306672.jpg", "voice_actor" => "Miyu Irino"]
                ]),
            ],
            [
                'anime_name' => 'My Hero Academia',
                'source' => 'films',
                'description' => 'In a world where most humans have superpowers, Izuku Midoriya attends U.A. High School to become a Pro Hero.',
                'genres' => 'Action,Superhero,School',
                'characters' => json_encode([
                    ["name" => "Izuku Midoriya", "image_url" => "https://cdn.myanimelist.net/images/characters/7/299404.jpg", "voice_actor" => "Daiki Yamashita"],
                    ["name" => "Katsuki Bakugo", "image_url" => "https://cdn.myanimelist.net/images/characters/12/299406.jpg", "voice_actor" => "Nobuhiko Okamoto"],
                    ["name" => "Shoto Todoroki", "image_url" => "https://cdn.myanimelist.net/images/characters/12/332527.jpg", "voice_actor" => "Yuki Kaji"]
                ]),
            ],
            [
                'anime_name' => 'Naruto: Shippuden',
                'source' => 'films',
                'description' => 'Naruto Uzumaki continues his quest to become Hokage and save his friend Sasuke while facing dangerous foes from Akatsuki.',
                'genres' => 'Action,Adventure,Martial Arts',
                'characters' => json_encode([
                    ["name" => "Naruto Uzumaki", "image_url" => "https://cdn.myanimelist.net/images/characters/12/61330.jpg", "voice_actor" => "Junko Takeuchi"],
                    ["name" => "Sasuke Uchiha", "image_url" => "https://cdn.myanimelist.net/images/characters/9/131317.jpg", "voice_actor" => "Noriaki Sugiyama"],
                    ["name" => "Sakura Haruno", "image_url" => "https://cdn.myanimelist.net/images/characters/9/69275.jpg", "voice_actor" => "Chie Nakamura"]
                ]),
            ],
            [
                'anime_name' => 'Ni no Kuni',
                'source' => 'movies',
                'description' => 'Two friends are transported to a magical world where they must rescue a princess and make a difficult choice.',
                'genres' => 'Fantasy,Adventure,Drama',
                'characters' => json_encode([
                    ["name" => "Yuu", "image_url" => "https://cdn.myanimelist.net/images/characters/16/434447.jpg", "voice_actor" => "Kento Yamazaki"],
                    ["name" => "Haru", "image_url" => "https://cdn.myanimelist.net/images/characters/15/434448.jpg", "voice_actor" => "Takahiro Sakurai"],
                    ["name" => "Asha", "image_url" => "https://cdn.myanimelist.net/images/characters/16/434449.jpg", "voice_actor" => "Mei Nagano"]
                ]),
            ],
            [
                'anime_name' => 'One Piece',
                'source' => 'films',
                'description' => 'Monkey D. Luffy sets sail with his crew to find the legendary One Piece and become the Pirate King.',
                'genres' => 'Action,Adventure,Fantasy',
                'characters' => json_encode([
                    ["name" => "Monkey D. Luffy", "image_url" => "https://cdn.myanimelist.net/images/characters/9/310307.jpg", "voice_actor" => "Mayumi Tanaka"],
                    ["name" => "Roronoa Zoro", "image_url" => "https://cdn.myanimelist.net/images/characters/3/100534.jpg", "voice_actor" => "Kazuya Nakai"],
                    ["name" => "Nami", "image_url" => "https://cdn.myanimelist.net/images/characters/2/263249.jpg", "voice_actor" => "Akemi Okamura"]
                ]),
            ],
            [
                'anime_name' => 'Paprika',
                'source' => 'movies',
                'description' => 'A psychologist uses a dream device to explore the unconscious minds of patients, but it falls into the wrong hands.',
                'genres' => 'Sci-Fi,Psychological,Thriller',
                'characters' => json_encode([
                    ["name" => "Paprika", "image_url" => "https://cdn.myanimelist.net/images/characters/14/177123.jpg", "voice_actor" => "Megumi Hayashibara"],
                    ["name" => "Dr. Atsuko Chiba", "image_url" => "https://cdn.myanimelist.net/images/characters/9/116777.jpg", "voice_actor" => "Megumi Hayashibara"],
                    ["name" => "Dr. Kosaku Tokita", "image_url" => "https://cdn.myanimelist.net/images/characters/2/61462.jpg", "voice_actor" => "Toru Furuya"]
                ]),
            ],
            [
                'anime_name' => 'Solo Leveling',
                'source' => 'films',
                'description' => 'Sung Jin-Woo, seorang hunter lemah, mendapatkan kemampuan misterius untuk naik level setelah selamat dari dungeon ganda.',
                'genres' => 'Action,Fantasy,Adventure',
                'characters' => json_encode([
                    ["name" => "Sung Jin-Woo", "image_url" => "https://cdn.myanimelist.net/images/characters/2/540692.jpg", "voice_actor" => "Taito Ban"],
                    ["name" => "Cha Hae-In", "image_url" => "https://cdn.myanimelist.net/images/characters/9/536361.jpg", "voice_actor" => "Reina Ueda"],
                    ["name" => "Go Gun-Hee", "image_url" => "https://cdn.myanimelist.net/images/characters/3/531270.jpg", "voice_actor" => "Daisuke Hirakawa"]
                ]),
            ],
            [
                'anime_name' => 'Spy x Family',
                'source' => 'films',
                'description' => 'Seorang mata-mata harus membentuk keluarga palsu demi menjalankan misinya. Tanpa ia ketahui, istri dan anak angkatnya juga memiliki rahasia masing-masing.',
                'genres' => 'Action,Comedy,Slice of Life',
                'characters' => json_encode([
                    ["name" => "Loid Forger", "image_url" => "https://cdn.myanimelist.net/images/characters/2/457747.jpg", "voice_actor" => "Takuya Eguchi"],
                    ["name" => "Yor Forger", "image_url" => "https://cdn.myanimelist.net/images/characters/11/457934.jpg", "voice_actor" => "Saori Hayami"],
                    ["name" => "Anya Forger", "image_url" => "https://cdn.myanimelist.net/images/characters/4/457933.jpg", "voice_actor" => "Atsumi Tanezaki"]
                ]),
            ],
            [
                'anime_name' => 'Steins;Gate',
                'source' => 'tv_series',
                'description' => 'A group of friends accidentally discover a method of time travel and find themselves in a dangerous conspiracy.',
                'genres' => 'Sci-Fi,Thriller,Psychological',
                'characters' => json_encode([
                    ["name" => "Rintarou Okabe", "image_url" => "https://cdn.myanimelist.net/images/characters/6/122643.jpg", "voice_actor" => "Mamoru Miyano"],
                    ["name" => "Kurisu Makise", "image_url" => "https://cdn.myanimelist.net/images/characters/12/492885.jpg", "voice_actor" => "Asami Imai"],
                    ["name" => "Mayuri Shiina", "image_url" => "https://cdn.myanimelist.net/images/characters/4/131329.jpg", "voice_actor" => "Kana Hanazawa"]
                ]),
            ],
             [
                'anime_name' => 'Summer Wars',
                'source' => 'movies',
                'description' => 'A math genius is caught in a virtual conflict threatening the real world when a rogue AI disrupts the digital realm.',
                'genres' => 'Sci-Fi,Action,Family',
                'characters' => json_encode([
                    ["name" => "Kenji Koiso", "image_url" => "https://cdn.myanimelist.net/images/characters/8/380824.jpg", "voice_actor" => "Ryunosuke Kamiki"],
                    ["name" => "Natsuki Shinohara", "image_url" => "https://cdn.myanimelist.net/images/characters/9/82254.jpg", "voice_actor" => "Nanami Sakuraba"],
                    ["name" => "Kazuma Ikezawa", "image_url" => "https://cdn.myanimelist.net/images/characters/13/82264.jpg", "voice_actor" => "Mitsuki Tanimura"]
                ]),
            ],
            [
                'anime_name' => 'Sword Art Online',
                'source' => 'films',
                'description' => 'Players of a virtual reality MMORPG must fight to survive after being trapped in the game with no way out.',
                'genres' => 'Sci-Fi,Action,Romance',
                'characters' => json_encode([
                    ["name" => "Kirito", "image_url" => "https://cdn.myanimelist.net/images/characters/7/204821.jpg", "voice_actor" => "Yoshitsugu Matsuoka"],
                    ["name" => "Asuna", "image_url" => "https://cdn.myanimelist.net/images/characters/15/262053.jpg", "voice_actor" => "Haruka Tomatsu"],
                    ["name" => "Yui", "image_url" => "https://cdn.myanimelist.net/images/characters/15/264165.jpg", "voice_actor" => "Itou Kanae"]
                ]),
            ],
            [
                'anime_name' => 'The Girl Who Leapt Through Time',
                'source' => 'movies',
                'description' => 'A high school girl gains the ability to leap through time, but her actions have unforeseen consequences.',
                'genres' => 'Sci-Fi,Romance,Drama',
                'characters' => json_encode([
                    ["name" => "Makoto Konno", "image_url" => "https://cdn.myanimelist.net/images/characters/7/100762.jpg", "voice_actor" => "Riisa Naka"],
                    ["name" => "Chiaki Mamiya", "image_url" => "https://cdn.myanimelist.net/images/characters/14/457439.jpg", "voice_actor" => "Takuya Ishida"],
                    ["name" => "Kousuke Tsuda", "image_url" => "https://cdn.myanimelist.net/images/characters/7/205331.jpg", "voice_actor" => "Mitsutaka Itakura"]
                ]),
            ],
            [
                'anime_name' => 'The Tale of the Princess Kaguya',
                'source' => 'movies',
                'description' => 'A bamboo cutter finds a tiny girl inside a stalk and raises her as a princess with a mysterious celestial origin.',
                'genres' => 'Fantasy,Drama,Historical',
                'characters' => json_encode([
                    ["name" => "Princess Kaguya", "image_url" => "https://cdn.myanimelist.net/images/characters/6/282662.jpg", "voice_actor" => "Aki Asakura"],
                    ["name" => "Sanuki no Miyatsuko", "image_url" => "https://cdn.myanimelist.net/images/characters/8/276843.jpg", "voice_actor" => "Takeo Chii"],
                    ["name" => "Ona", "image_url" => "https://cdn.myanimelist.net/images/characters/6/276844.jpg", "voice_actor" => "Nobuko Miyamoto"]
                ]),
            ],
            [
                'anime_name' => 'Tokyo Revengers',
                'source' => 'films',
                'description' => 'Takemichi Hanagaki, seorang pria dewasa yang menyadari bisa kembali ke masa lalu untuk mencegah kematian mantan pacarnya akibat konflik geng berbahaya.',
                'genres' => 'Action,Drama,Supernatural',
                'characters' => json_encode([
                    ["name" => "Takemichi Hanagaki", "image_url" => "https://cdn.myanimelist.net/images/characters/6/448782.jpg", "voice_actor" => "Yuki Shin"],
                    ["name" => "Manjiro Sano", "image_url" => "https://cdn.myanimelist.net/images/characters/4/514406.jpg", "voice_actor" => "Yu Hayashi"],
                    ["name" => "Ken Ryuguji", "image_url" => "https://cdn.myanimelist.net/images/characters/3/388001.jpg", "voice_actor" => "Tatsuhisa Suzuki"]
                ]),
            ],
            [
                'anime_name' => 'When Marnie Was There',
                'source' => 'movies',
                'description' => 'A lonely girl sent to the countryside befriends a mysterious girl named Marnie, uncovering deep family secrets.',
                'genres' => 'Drama,Mystery,Supernatural',
                'characters' => json_encode([
                    ["name" => "Anna Sasaki", "image_url" => "https://cdn.myanimelist.net/images/characters/14/282926.jpg", "voice_actor" => "Sara Takatsuki"],
                    ["name" => "Marnie", "image_url" => "https://cdn.myanimelist.net/images/characters/7/282923.jpg", "voice_actor" => "Kasumi Arimura"],
                    ["name" => "Yoriko Sasaki", "image_url" => "https://cdn.myanimelist.net/images/characters/3/282930.jpg", "voice_actor" => "Nanako Matsushima"]
                ]),
            ],
            [
                'anime_name' => 'Wolf Children',
                'source' => 'movies',
                'description' => 'A young mother raises her half-wolf children in the countryside after the death of their werewolf father.',
                'genres' => 'Drama,Fantasy,Slice of Life',
                'characters' => json_encode([
                    ["name" => "Hana", "image_url" => "https://cdn.myanimelist.net/images/characters/8/523753.jpg", "voice_actor" => "Aoi Miyazaki"],
                    ["name" => "Yuki", "image_url" => "https://cdn.myanimelist.net/images/characters/16/523756.jpg", "voice_actor" => "Haru Kuroki"],
                    ["name" => "Ame", "image_url" => "https://cdn.myanimelist.net/images/characters/15/523754.jpg", "voice_actor" => "Yukito Nishii"]
                ]),
            ],
            // ... Tambahkan semua data metadata lainnya dari file .sql di sini
        ]);
    }
}