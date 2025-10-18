<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleDetailSeeder extends Seeder
{
    public function run()
    {
        DB::table('people_details')->insert([
            [
                'person_id' => 1,
                'name' => 'Miyazaki, Hayao',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/54606.jpg',
                'known_for_department' => 'Directing',
                'known_credits_count' => 50,
                'gender' => 'Male',
                'birth_date' => '1941-01-05',
                'place_of_birth' => 'Bunkyō, Tokyo, Japan',
                'biography' => "Hayao Miyazaki (born January 5, 1941) is a Japanese animator, director, producer, screenwriter, author, and manga artist. A co-founder of Studio Ghibli, he is widely regarded as one of the most accomplished filmmakers in the history of animation. Miyazaki's works are characterized by their imaginative storytelling, richly detailed worlds, and themes of environmentalism, pacifism, and feminism.Some of his most notable films include *My Neighbor Totoro* (1988), *Princess Mononoke* (1997), *Spirited Away* (2001), which won the Academy Award for Best Animated Feature, and *Howl's Moving Castle* (2004). His films have received critical acclaim and have been commercially successful worldwide.Miyazaki retired multiple times but returned to filmmaking, with his latest project being *The Boy and the Heron* (2023). His influence on animation and storytelling has inspired countless creators and continues to shape the industry.Description above from various sources, including Studio Ghibli and public interviews.",
                'also_known_as' => json_encode(["宮崎 駿", "미야자키 하야오", "宫崎骏", "Хаяо Миядзаки", "هياو ميازاكي", "Hayao Miyazaki"]),
                'known_for_films' => json_encode([
                    ["alt" => "My Neighbor Totoro", "title" => "My Neighbor Totoro", "image_url" => "https://image.tmdb.org/t/p/w200/rtGDOeG9LzoerkDGZF9dnVeLppL.jpg"],
                    ["alt" => "Spirited Away", "title" => "Spirited Away", "image_url" => "https://image.tmdb.org/t/p/original/fJGWeVHGuLSWbGShaxICAUCzBE5.jpg"],
                    ["alt" => "Princess Mononoke", "title" => "Princess Mononoke", "image_url" => "https://image.tmdb.org/t/p/w200/pdtzEreKvKAlqa2YEBaGwiA45V8.jpg"],
                    ["alt" => "Howl's Moving Castle", "title" => "Howl's Moving Castle", "image_url" => "https://th.bing.com/th/id/OIP.4DHhEX0BYU0JtB_C2j7BMQHaLH?rs=1&pid=ImgDetMain"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "2002", "popup_title" => "Mei to Koneko Bus", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1034/99602.jpg", "credit_role_main" => "Grandmother Nekobasu", "popup_description" => "One windy day, Mei Kusakabe ventures outside to play despite the turbulent weather. But just as she is about to indulge in her caramel candy, a sudden whirlwind appears and begins to chase her! Retreating back into the house, Mei discovers that her pursuer is a young Nekobasu, and after deciding on a sweet truce, the two quickly become friends. The baby Nekobasu returns that evening and invites Mei to travel with him—marking the start of their exhilarating adventure in and around the bustling forest.", "credit_role_secondary" => "as Supporting"],
                    ["year" => "2013", "popup_title" => "The Wind Rises", "popup_image_url" => "https://vistapointe.net/images/the-wind-rises-4.jpg", "credit_role_main" => "Kaze Tachinu", "popup_description" => "Despite his nearsightedness preventing him from becoming a pilot, Jirou Horikoshi pursues his dream of designing airplanes like his hero, Caproni, by studying aeronautical engineering in Tokyo. After saving a maid during the Great Kanto Earthquake of 1923—an event that also connects him to Naoko Satomi—Jirou's journey unfolds amid decades of turmoil leading to World War II. As he works on the Mitsubishi A6M Zero fighter, he is forced to confront the moral cost of his creations and the struggles of his personal life, ultimately facing the painful question: what is the true price of chasing a beautiful dream?", "credit_role_secondary" => "The Wind Rises"]
                ]),
            ],
            [
                'person_id' => 2,
                'name' => 'Oda, Eiichiro',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/74096.jpg',
                'known_for_department' => 'Writing',
                'known_credits_count' => 120,
                'gender' => 'Male',
                'birth_date' => '1975-01-01',
                'place_of_birth' => 'Kumamoto, Japan',
                'biography' => "Eiichiro Oda is a Japanese manga artist and the creator of the popular manga series One Piece. First serialized in Weekly Shonen Jump in 1997, One Piece has become one of the best-selling manga series of all time. Known for its intricate storylines, unique characters, and imaginative world-building, Oda has garnered worldwide acclaim. His dedication to storytelling and deep connection with fans has made him a central figure in modern manga culture. The series has inspired anime adaptations, films, and a global fan base, with the story's conclusion expected within the next few years.",
                'also_known_as' => json_encode(["尾田 栄一郎", "Eiichirō Oda", "Oda-sensei"]),
                'known_for_films' => json_encode([
                    ["alt" => "One Piece Film: Red", "title" => "One Piece Film: Red", "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4b9V9zMfPaQrx3_LYuzDwYIE_QBb92UkwIA&s"],
                    ["alt" => "One Piece (Anime)", "title" => "One Piece (Anime)", "image_url" => "https://www.gamereactor.asia/media/54/new1piece_4425493b.jpg"],
                    ["alt" => "One Piece (Manga)", "title" => "One Piece (Manga)", "image_url" => "https://awsimages.detik.net.id/community/media/visual/2024/04/20/top-7-cover-terbaik-manga-one-piece-6.webp?w=1200"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "1997", "popup_title" => "One Piece (Manga)", "popup_image_url" => "https://awsimages.detik.net.id/community/media/visual/2024/04/20/top-7-cover-terbaik-manga-one-piece-6.webp?w=1200", "credit_role_main" => "Author", "popup_description" => "The story follows Monkey D. Luffy, a young man with the ability to stretch like rubber after eating a Devil Fruit. He sets off on a journey to find the One Piece treasure and become the Pirate King.", "credit_role_secondary" => "Illustrator"],
                    ["year" => "1999", "popup_title" => "One Piece (Anime)", "popup_image_url" => "https://www.gamereactor.asia/media/54/new1piece_4425493b.jpg", "credit_role_main" => "Original Creator", "popup_description" => "Adaptation of the manga into an anime series produced by Toei Animation. Follows the adventures of Luffy and his crew as they search for the One Piece.", "credit_role_secondary" => "Story"],
                    ["year" => "2022", "popup_title" => "One Piece Film: Red", "popup_image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4b9V9zMfPaQrx3_LYuzDwYIE_QBb92UkwIA&s", "credit_role_main" => "Original Creator", "popup_description" => "Uta, the most beloved singer in the world, is known for concealing her own identity. For the first time ever, she will reveal herself to the world at a live concert. The venue fills with fans—including pirates, the Navy, and the Straw Hats. But her shocking connection to Shanks sets off a new adventure.", "credit_role_secondary" => "Story and Characters"]
                ]),
            ],
            [
                'person_id' => 3,
                'name' => 'Takahashi, Rie',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/3/86541.jpg',
                'known_for_department' => 'Acting',
                'known_credits_count' => 80,
                'gender' => 'Female',
                'birth_date' => '1994-02-27',
                'place_of_birth' => 'Saitama, Japan',
                'biography' => "Rie Takahashi is a Japanese voice actress and singer affiliated with 81 Produce. She made her debut in the 2010s and quickly gained popularity for her energetic and emotive voice performances. Rie has voiced many iconic characters in modern anime, and is especially known for voicing Megumin in *KonoSuba*, Emilia in *Re:Zero*, and Takagi in *Teasing Master Takagi-san*. In addition to her voice work, she also performs theme songs and character songs. Takahashi has become one of the most prominent seiyuu of her generation and is well-loved by fans for her talent and charisma.",
                'also_known_as' => json_encode(["高橋 李依", "たかはし りえ", "Rie Takahashi"]),
                'known_for_films' => json_encode([
                    ["alt" => "KonoSuba: God's Blessing on This Wonderful World!", "title" => "KonoSuba", "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5uJshIBtAIyE0lJ2-gFEsHsVVE5E951cgmg&s"],
                    ["alt" => "Re:Zero - Starting Life in Another World", "title" => "Re:Zero", "image_url" => "https://m.media-amazon.com/images/M/MV5BNTY1M2NjMTItOGFhNi00NDU3LWExNzQtZGY2YWJlYzExNmU3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"],
                    ["alt" => "Teasing Master Takagi-san", "title" => "Teasing Master Takagi-san", "image_url" => "https://m.media-amazon.com/images/M/MV5BNjliYzA2OWQtNTI3Mi00OTc4LWJlZDktNzhmZTc5YjhiZDEyXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "2016", "popup_title" => "KonoSuba: God's Blessing on This Wonderful World!", "popup_image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5uJshIBtAIyE0lJ2-gFEsHsVVE5E951cgmg&s", "credit_role_main" => "Voice Actress", "popup_description" => "Rie Takahashi voices Megumin, an explosion magic-obsessed archwizard in this fantasy comedy. Her performance became iconic for its eccentricity and catchphrases.", "credit_role_secondary" => "Megumin"],
                    ["year" => "2016", "popup_title" => "Re:Zero - Starting Life in Another World", "popup_image_url" => "https://m.media-amazon.com/images/M/MV5BNTY1M2NjMTItOGFhNi00NDU3LWExNzQtZGY2YWJlYzExNmU3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg", "credit_role_main" => "Voice Actress", "popup_description" => "She portrays Emilia, a half-elf girl who becomes the central figure in Subaru's journey through an alternate world filled with danger and mystery.", "credit_role_secondary" => "Emilia"],
                    ["year" => "2018", "popup_title" => "Teasing Master Takagi-san", "popup_image_url" => "https://m.media-amazon.com/images/M/MV5BNjliYzA2OWQtNTI3Mi00OTc4LWJlZDktNzhmZTc5YjhiZDEyXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg", "credit_role_main" => "Voice Actress", "popup_description" => "Takahashi plays the role of Takagi, a witty and calm middle school girl who enjoys playfully teasing her classmate Nishikata. Her voice adds charm to the character’s mischievous yet kind personality.", "credit_role_secondary" => "Takagi"]
                ]),
            ],
                        [
                'person_id' => 4,
                'name' => 'Tsuda, Kenjirou',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/63379.jpg',
                'known_for_department' => 'Acting',
                'known_credits_count' => 90,
                'gender' => 'Male',
                'birth_date' => '1971-06-11',
                'place_of_birth' => 'Osaka, Japan',
                'biography' => "Kenjirou Tsuda is a Japanese voice actor, narrator, and actor affiliated with Amuleto. Known for his deep, smooth voice and versatile acting range, he has portrayed a wide array of characters in anime, video games, and films. Some of his most iconic roles include Seto Kaiba in *Yu-Gi-Oh!*, Nanami Kento in *Jujutsu Kaisen*, and Kishibe in *Chainsaw Man*. Outside of voice acting, Tsuda has also worked as a live-action actor and film director, earning acclaim for his charisma and emotional depth. His performances are often associated with cool, stoic, or mysterious characters.",
                'also_known_as' => json_encode(["津田 健次郎", "Kenjiro Tsuda", "つだ けんじろう"]),
                'known_for_films' => json_encode([
                    ["alt" => "Yu-Gi-Oh!", "title" => "Yu-Gi-Oh!", "image_url" => "https://upload.wikimedia.org/wikipedia/en/5/5e/Yugioh_Duel_Monsters_Keyart.png"],
                    ["alt" => "Jujutsu Kaisen", "title" => "Jujutsu Kaisen", "image_url" => "https://cdn.myanimelist.net/images/anime/1171/109222.jpg"],
                    ["alt" => "Chainsaw Man", "title" => "Chainsaw Man", "image_url" => "https://cdn.myanimelist.net/images/anime/1806/126216.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "1998", "popup_title" => "Yu-Gi-Oh!", "popup_image_url" => "https://upload.wikimedia.org/wikipedia/en/5/5e/Yugioh_Duel_Monsters_Keyart.png", "credit_role_main" => "Voice Actor", "popup_description" => "Kenjirou Tsuda gained early recognition as Seto Kaiba in Yu-Gi-Oh!, a rival and antihero with an iconic deep tone that became one of his signature performances.", "credit_role_secondary" => "Seto Kaiba"],
                    ["year" => "2020", "popup_title" => "Jujutsu Kaisen", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1171/109222.jpg", "credit_role_main" => "Voice Actor", "popup_description" => "Portrays Nanami Kento, a calm and professional jujutsu sorcerer known for his intelligence and strict sense of duty.", "credit_role_secondary" => "Nanami Kento"],
                    ["year" => "2022", "popup_title" => "Chainsaw Man", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1806/126216.jpg", "credit_role_main" => "Voice Actor", "popup_description" => "Tsuda voices Kishibe, a senior devil hunter with a rough yet philosophical outlook on life, adding gravity to the dark tone of the show.", "credit_role_secondary" => "Kishibe"]
                ]),
            ],
            [
                'person_id' => 5,
                'name' => 'Kishimoto, Masashi',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/42365.jpg',
                'known_for_department' => 'Writing',
                'known_credits_count' => 70,
                'gender' => 'Male',
                'birth_date' => '1974-11-08',
                'place_of_birth' => 'Okayama, Japan',
                'biography' => "Masashi Kishimoto is a Japanese manga artist best known as the creator of the global hit manga series *Naruto*. Serialized in Weekly Shonen Jump from 1999 to 2014, *Naruto* became one of the best-selling manga of all time, spawning anime adaptations, films, and a sequel, *Boruto: Naruto Next Generations*. Kishimoto is praised for his dynamic art style, memorable characters, and emotionally resonant storytelling. His influences include Akira Toriyama’s *Dragon Ball* and Katsuhiro Otomo’s *Akira*. Beyond *Naruto*, Kishimoto has worked on *Samurai 8* and continues to oversee the *Naruto* franchise.",
                'also_known_as' => json_encode(["岸本 斉史", "きしもと まさし"]),
                'known_for_films' => json_encode([
                    ["alt" => "Naruto", "title" => "Naruto", "image_url" => "https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg"],
                    ["alt" => "Naruto Shippuden", "title" => "Naruto Shippuden", "image_url" => "https://cdn.myanimelist.net/images/anime/1565/111305.jpg"],
                    ["alt" => "Boruto: Naruto Next Generations", "title" => "Boruto", "image_url" => "https://cdn.myanimelist.net/images/anime/1704/105954.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "1999", "popup_title" => "Naruto", "popup_image_url" => "https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg", "credit_role_main" => "Author", "popup_description" => "The story of Naruto Uzumaki, a young ninja with dreams of becoming the strongest leader of his village, the Hokage.", "credit_role_secondary" => "Writer & Illustrator"],
                    ["year" => "2007", "popup_title" => "Naruto Shippuden", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1565/111305.jpg", "credit_role_main" => "Creator", "popup_description" => "The continuation of Naruto’s journey as he faces powerful enemies and confronts his destiny.", "credit_role_secondary" => "Original Story"],
                    ["year" => "2017", "popup_title" => "Boruto: Naruto Next Generations", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1704/105954.jpg", "credit_role_main" => "Supervisor", "popup_description" => "The next generation of ninjas led by Naruto’s son, Boruto Uzumaki, with Kishimoto serving as the story supervisor.", "credit_role_secondary" => "Story Supervisor"]
                ]),
            ],
            [
                'person_id' => 6,
                'name' => 'Hayami, Saori',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/86542.jpg',
                'known_for_department' => 'Acting',
                'known_credits_count' => 100,
                'gender' => 'Female',
                'birth_date' => '1991-05-29',
                'place_of_birth' => 'Tokyo, Japan',
                'biography' => "Saori Hayami is a Japanese voice actress and singer affiliated with I'm Enterprise. Known for her elegant, gentle voice, she has portrayed a wide range of characters from calm heroines to strong-willed protagonists. Her notable roles include Yukino Yukinoshita in *My Teen Romantic Comedy SNAFU*, Shinobu Kochou in *Demon Slayer*, and Yor Forger in *SPY x FAMILY*. In addition to her voice acting, Hayami is an accomplished singer and frequently performs anime theme songs and character tracks. Her graceful tone and professionalism have made her one of the most respected seiyuu in the industry.",
                'also_known_as' => json_encode(["早見 沙織", "はやみ さおり"]),
                'known_for_films' => json_encode([
                    ["alt" => "My Teen Romantic Comedy SNAFU", "title" => "Oregairu", "image_url" => "https://cdn.myanimelist.net/images/anime/12/76049.jpg"],
                    ["alt" => "Demon Slayer", "title" => "Kimetsu no Yaiba", "image_url" => "https://cdn.myanimelist.net/images/anime/1286/99889.jpg"],
                    ["alt" => "SPY x FAMILY", "title" => "SPY x FAMILY", "image_url" => "https://cdn.myanimelist.net/images/anime/1441/122795.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "2013", "popup_title" => "My Teen Romantic Comedy SNAFU", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/12/76049.jpg", "credit_role_main" => "Voice Actress", "popup_description" => "Hayami voices Yukino Yukinoshita, a sharp and intelligent student who hides her emotions behind a cold demeanor.", "credit_role_secondary" => "Yukino Yukinoshita"],
                    ["year" => "2019", "popup_title" => "Demon Slayer", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1286/99889.jpg", "credit_role_main" => "Voice Actress", "popup_description" => "Plays Shinobu Kochou, the Insect Hashira known for her soft voice and deadly poison techniques.", "credit_role_secondary" => "Shinobu Kochou"],
                    ["year" => "2022", "popup_title" => "SPY x FAMILY", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1441/122795.jpg", "credit_role_main" => "Voice Actress", "popup_description" => "Portrays Yor Forger, a professional assassin leading a double life as a gentle wife in a spy family.", "credit_role_secondary" => "Yor Forger"]
                ]),
            ],
            [
                'person_id' => 7,
                'name' => 'Sawano, Hiroyuki',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/82144.jpg',
                'known_for_department' => 'Music',
                'known_credits_count' => 150,
                'gender' => 'Male',
                'birth_date' => '1980-09-12',
                'place_of_birth' => 'Tokyo, Japan',
                'biography' => "Hiroyuki Sawano is a Japanese composer, arranger, lyricist, pianist, and music producer. He is renowned for his powerful and emotional compositions that have defined many modern anime and live-action soundtracks. His works often feature orchestral, electronic, and vocal elements that create intense atmospheres. Sawano has composed music for major titles such as *Attack on Titan*, *Kill la Kill*, *Blue Exorcist*, and *Aldnoah.Zero*. His unique sound and ability to capture the emotional tone of a story have made him one of the most influential composers in Japanese entertainment.",
                'also_known_as' => json_encode(["澤野 弘之", "Sawano Hiroyuki[nZk]"]),
                'known_for_films' => json_encode([
                    ["alt" => "Attack on Titan", "title" => "Attack on Titan", "image_url" => "https://cdn.myanimelist.net/images/anime/10/47347.jpg"],
                    ["alt" => "Kill la Kill", "title" => "Kill la Kill", "image_url" => "https://cdn.myanimelist.net/images/anime/6/78345.jpg"],
                    ["alt" => "Blue Exorcist", "title" => "Blue Exorcist", "image_url" => "https://cdn.myanimelist.net/images/anime/10/73667.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "2013", "popup_title" => "Attack on Titan", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/10/47347.jpg", "credit_role_main" => "Composer", "popup_description" => "Composed the legendary soundtrack of *Attack on Titan*, blending orchestral grandeur with modern intensity.", "credit_role_secondary" => "Music Composer"],
                    ["year" => "2014", "popup_title" => "Kill la Kill", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/6/78345.jpg", "credit_role_main" => "Composer", "popup_description" => "Created the stylish and energetic score that amplified the wild action and emotional beats of the series.", "credit_role_secondary" => "Soundtrack Composer"],
                    ["year" => "2011", "popup_title" => "Blue Exorcist", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/10/73667.jpg", "credit_role_main" => "Composer", "popup_description" => "Crafted an emotional soundtrack combining choral, rock, and orchestral elements to elevate the show's supernatural themes.", "credit_role_secondary" => "Composer"]
                ]),
            ],
             [
                'person_id' => 8,
                'name' => 'Anno, Hideaki',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/54280.jpg',
                'known_for_department' => 'Directing',
                'known_credits_count' => 60,
                'gender' => 'Male',
                'birth_date' => '1960-05-22',
                'place_of_birth' => 'Ube, Yamaguchi, Japan',
                'biography' => "Hideaki Anno is a Japanese animator, film director, and actor, best known for creating the groundbreaking anime *Neon Genesis Evangelion*. He began his career as an animator on Hayao Miyazaki’s *Nausicaä of the Valley of the Wind* before co-founding the influential studio Gainax. His work is known for its exploration of depression, identity, and existentialism, often reflecting his own struggles. Beyond *Evangelion*, Anno directed live-action films including *Shin Godzilla* (2016) and *Shin Kamen Rider* (2023), showcasing his range across genres.",
                'also_known_as' => json_encode(["庵野 秀明", "Anno Hideaki"]),
                'known_for_films' => json_encode([
                    ["alt" => "Neon Genesis Evangelion", "title" => "Neon Genesis Evangelion", "image_url" => "https://cdn.myanimelist.net/images/anime/1314/108941.jpg"],
                    ["alt" => "Shin Godzilla", "title" => "Shin Godzilla", "image_url" => "https://upload.wikimedia.org/wikipedia/en/5/5b/Shin_Godzilla_poster.jpg"],
                    ["alt" => "Evangelion: 3.0+1.0 Thrice Upon a Time", "title" => "Evangelion: 3.0+1.0 Thrice Upon a Time", "image_url" => "https://cdn.myanimelist.net/images/anime/1988/113791.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "1995", "popup_title" => "Neon Genesis Evangelion", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1314/108941.jpg", "credit_role_main" => "Director", "popup_description" => "Anno’s most influential work, blending mecha action with deep psychological themes, redefining anime storytelling.", "credit_role_secondary" => "Director & Creator"],
                    ["year" => "2016", "popup_title" => "Shin Godzilla", "popup_image_url" => "https://upload.wikimedia.org/wikipedia/en/5/5b/Shin_Godzilla_poster.jpg", "credit_role_main" => "Director", "popup_description" => "A modern reimagining of Godzilla, focusing on Japan’s bureaucracy and national crisis response.", "credit_role_secondary" => "Film Director"],
                    ["year" => "2021", "popup_title" => "Evangelion: 3.0+1.0 Thrice Upon a Time", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1988/113791.jpg", "credit_role_main" => "Director", "popup_description" => "The long-awaited conclusion to the Evangelion Rebuild series, bringing closure to decades of storytelling.", "credit_role_secondary" => "Chief Director"]
                ]),
            ],
            [
                'person_id' => 9,
                'name' => 'Kon, Satoshi',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/3/46672.jpg',
                'known_for_department' => 'Directing',
                'known_credits_count' => 25,
                'gender' => 'Male',
                'birth_date' => '1963-10-12',
                'place_of_birth' => 'Sapporo, Japan',
                'biography' => "Satoshi Kon was a visionary Japanese film director, animator, and screenwriter renowned for his psychological storytelling and blending of fantasy with reality. His works such as *Perfect Blue*, *Millennium Actress*, and *Paprika* have profoundly influenced both anime and global cinema, including Western directors like Christopher Nolan and Darren Aronofsky. Kon’s meticulous direction, complex narratives, and themes of identity and perception made him one of the most respected auteurs in animation history before his untimely death in 2010.",
                'also_known_as' => json_encode(["今 敏", "Kon Satoshi"]),
                'known_for_films' => json_encode([
                    ["alt" => "Perfect Blue", "title" => "Perfect Blue", "image_url" => "https://cdn.myanimelist.net/images/anime/10/78745.jpg"],
                    ["alt" => "Millennium Actress", "title" => "Millennium Actress", "image_url" => "https://cdn.myanimelist.net/images/anime/6/79597.jpg"],
                    ["alt" => "Paprika", "title" => "Paprika", "image_url" => "https://cdn.myanimelist.net/images/anime/10/75618.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "1997", "popup_title" => "Perfect Blue", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/10/78745.jpg", "credit_role_main" => "Director", "popup_description" => "A psychological thriller exploring fame, delusion, and identity through the story of a pop idol turned actress.", "credit_role_secondary" => "Director"],
                    ["year" => "2001", "popup_title" => "Millennium Actress", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/6/79597.jpg", "credit_role_main" => "Director", "popup_description" => "A mesmerizing tale of memory and love told through the life of a legendary actress blending film and reality.", "credit_role_secondary" => "Director"],
                    ["year" => "2006", "popup_title" => "Paprika", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/10/75618.jpg", "credit_role_main" => "Director", "popup_description" => "An exploration of dreams and consciousness that inspired the visual style of *Inception*.", "credit_role_secondary" => "Director"]
                ]),
            ],
            [
                'person_id' => 10,
                'name' => 'Inoue, Takehiko',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/48570.jpg',
                'known_for_department' => 'Writing',
                'known_credits_count' => 40,
                'gender' => 'Male',
                'birth_date' => '1967-01-12',
                'place_of_birth' => 'Kagoshima Prefecture, Japan',
                'biography' => "Takehiko Inoue is a Japanese manga artist celebrated for his sports and human drama storytelling. He is best known for *Slam Dunk*, one of the most influential basketball manga ever created, which helped popularize the sport in Japan. His later works include *Vagabond*, a masterful adaptation of Musashi Miyamoto’s life, and *REAL*, a moving exploration of disability and rehabilitation through wheelchair basketball. Inoue’s detailed art and emotional depth have earned him numerous awards and worldwide acclaim.",
                'also_known_as' => json_encode(["井上 雄彦", "Inoue Takehiko"]),
                'known_for_films' => json_encode([
                    ["alt" => "Slam Dunk", "title" => "Slam Dunk", "image_url" => "https://cdn.myanimelist.net/images/anime/7/83655.jpg"],
                    ["alt" => "The First Slam Dunk", "title" => "The First Slam Dunk", "image_url" => "https://cdn.myanimelist.net/images/anime/1230/134667.jpg"],
                    ["alt" => "Vagabond", "title" => "Vagabond (Manga)", "image_url" => "https://upload.wikimedia.org/wikipedia/en/0/0c/Vagabond_manga_vol1.jpg"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "1993", "popup_title" => "Slam Dunk", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/7/83655.jpg", "credit_role_main" => "Author", "popup_description" => "Created the groundbreaking basketball manga that inspired generations and redefined sports storytelling in anime.", "credit_role_secondary" => "Original Creator"],
                    ["year" => "2022", "popup_title" => "The First Slam Dunk", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1230/134667.jpg", "credit_role_main" => "Director & Screenwriter", "popup_description" => "Returned to the world of *Slam Dunk* as the film’s director and screenwriter, marking his cinematic debut.", "credit_role_secondary" => "Film Director"],
                    ["year" => "1998", "popup_title" => "Vagabond (Manga)", "popup_image_url" => "https://upload.wikimedia.org/wikipedia/en/0/0c/Vagabond_manga_vol1.jpg", "credit_role_main" => "Author", "popup_description" => "An artistic adaptation of Musashi Miyamoto’s life exploring the path of a warrior through self-discovery.", "credit_role_secondary" => "Writer & Illustrator"]
                ]),
            ],
        ]);
    }
}