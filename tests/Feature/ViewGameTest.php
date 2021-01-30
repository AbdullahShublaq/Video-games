<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewGameTest extends TestCase
{
    /** @test */
    public function the_game_page_shows_correct_game_info()
    {

        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeSingleGame(),
        ]);

        $response = $this->get(route('games.show', 'fake-super-meat-boy-forever'));

        $response->assertSuccessful();
        $response->assertSee('Fake Super Meat Boy Forever');
        $response->assertSee('Platform');
        $response->assertSee('Puzzle');
        $response->assertSee('Indie');
        $response->assertSee('N/A');
        $response->assertSee('68');
        $response->assertSee('twitter.com/supermeatboy');
        $response->assertSee('Meat Boy and Bandage Girl have grown as a couple since 2010');
        $response->assertSee('//images.igdb.com/igdb/image/upload/t_screenshot_big/q3pmblfzdbxdfesno2ac.jpg');
        $response->assertSee('Figment');
    }

    private function fakeSingleGame()
    {
        return Http::response([
            0 => [
                "id" => 44129,
                "aggregated_rating" => 67.75,
                "cover" => [
                    "id" => 123667,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2nf7.jpg",
                ],
                "first_release_date" => 1640908800,
                "genres" => [
                    0 => [
                        "id" => 8,
                        "name" => "Platform",
                    ],
                    1 => [
                        "id" => 9,
                        "name" => "Puzzle",
                    ],
                    2 => [
                        "id" => 32,
                        "name" => "Indie",
                    ]
                ],
                "involved_companies" => [
                    0 => [
                        "id" => 84853,
                        "company" => [
                            "id" => 591,
                            "name" => "Team Meat"
                        ]
                    ]
                ],
                "name" => "Fake Super Meat Boy Forever",
                "platforms" => [
                    0 => [
                        "id" => 6,
                        "abbreviation" => "PC"
                    ],
                    1 => [
                        "id" => 48,
                        "abbreviation" => "PS4"
                    ],
                    2 => [
                        "id" => 49,
                        "abbreviation" => "XONE"
                    ],
                    3 => [
                        "id" => 130,
                        "abbreviation" => "Switch"
                    ]
                ],
                "screenshots" => [
                    0 => [
                        "id" => 127042,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "q3pmblfzdbxdfesno2ac",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/q3pmblfzdbxdfesno2ac.jpg",
                        "width" => 1920,
                        "checksum" => "4ae8c828-efcb-cf2d-e967-f25afbe7a80e"
                    ],
                    1 => [
                        "id" => 268608,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9c",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9c.jpg",
                        "width" => 1920,
                        "checksum" => "e58e0f53-63c2-3668-0bf3-01b2c84d5f5a"
                    ],
                    2 => [
                        "id" => 268609,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9d",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9d.jpg",
                        "width" => 1920,
                        "checksum" => "e3cad3c0-7f65-645d-d9a3-8884264332a3"
                    ],
                    3 => [
                        "id" => 268610,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9e",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9e.jpg",
                        "width" => 1920,
                        "checksum" => "13ddfb98-a604-619f-6694-89fc4940955b",
                    ],
                    4 => [
                        "id" => 268611,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9f",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9f.jpg",
                        "width" => 1920,
                        "checksum" => "d814370a-0ca5-f4c8-cf55-142349da5938"
                    ],
                    5 => [
                        "id" => 268612,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9g",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9g.jpg",
                        "width" => 1920,
                        "checksum" => "74eb3211-be3a-250a-3241-410870688990",
                    ],
                    6 => [
                        "id" => 268613,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9h",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9h.jpg",
                        "width" => 1920,
                        "checksum" => "a698f04d-fd4c-b143-c4ff-181bfe9079d9",
                    ],
                    7 => [
                        "id" => 268614,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9i",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9i.jpg",
                        "width" => 1920,
                        "checksum" => "5ae01424-ad34-4512-5cf3-26a9ee45c6e6",
                    ],
                    8 => [
                        "id" => 268615,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9j",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9j.jpg",
                        "width" => 1920,
                        "checksum" => "5ee6a400-e474-d67f-6f6e-630cc7f61cea",
                    ],
                    9 => [
                        "id" => 268616,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9k",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9k.jpg",
                        "width" => 1920,
                        "checksum" => "2ac46518-b849-a7f4-781c-71723560696f"
                    ],
                    10 => [
                        "id" => 268617,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9l",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9l.jpg",
                        "width" => 1920,
                        "checksum" => "8df37ad1-a9b0-41d8-246c-77c2a4822d79"
                    ],
                    11 => [
                        "id" => 268618,
                        "alpha_channel" => FALSE,
                        "animated" => FALSE,
                        "game" => 44129,
                        "height" => 1080,
                        "image_id" => "sc5r9m",
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r9m.jpg",
                        "width" => 1920,
                        "checksum" => "28b90853-42ff-9bce-c140-85d0e4b13051"
                    ]
                ],
                "similar_games" => [
                    0 => [
                        "id" => 20329,
                        "cover" => [
                            "id" => 70040,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1i1k.jpg"
                        ],
                        "name" => "Figment",
                        "platforms" => [
                            0 => [
                                "id" => 3,
                                "abbreviation" => "Linux"
                            ],
                            1 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            2 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            3 => [
                                "id" => 48,
                                "abbreviation" => "PS4"
                            ],
                            4 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            5 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 73.495762402282,
                        "slug" => "figment",
                    ],
                    1 => [
                        "id" => 20342,
                        "cover" => [
                            "id" => 92176,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1z4g.jpg",
                        ],
                        "name" => "Toby: The Secret Mine",
                        "platforms" => [
                            0 => [
                                "id" => 3,
                                "abbreviation" => "Linux"
                            ],
                            1 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            2 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            3 => [
                                "id" => 34,
                                "abbreviation" => "Android"
                            ],
                            4 => [
                                "id" => 39,
                                "abbreviation" => "iOS"
                            ],
                            5 => [
                                "id" => 41,
                                "abbreviation" => "WiiU"
                            ],
                            6 => [
                                "id" => 45,
                                "abbreviation" => "psn"
                            ],
                            7 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            8 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 70.0,
                        "slug" => "toby-the-secret-mine"
                    ],
                    2 => [
                        "id" => 23733,
                        "cover" => [
                            "id" => 67622,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/td1t8kb33gyo8mvhl2pc.jpg"
                        ],
                        "name" => "Tunic",
                        "platforms" => [
                            0 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            1 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            2 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            3 => [
                                "id" => 169,
                                "abbreviation" => "Series X"
                            ]
                        ],
                        "slug" => "tunic"
                    ],
                    3 => [
                        "id" => 24426,
                        "cover" => [
                            "id" => 81872,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1r68.jpg"
                        ],
                        "name" => "Forgotton Anne",
                        "platforms" => [
                            0 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            1 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            2 => [
                                "id" => 34,
                                "abbreviation" => "Android"
                            ],
                            3 => [
                                "id" => 39,
                                "abbreviation" => "iOS"
                            ],
                            4 => [
                                "id" => 48,
                                "abbreviation" => "PS4"
                            ],
                            5 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            6 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 72.657974946454,
                        "slug" => "forgotton-anne",
                    ],
                    4 => [
                        "id" => 26226,
                        "cover" => [
                            "id" => 87277,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1vcd.jpg"
                        ],
                        "name" => "Celeste",
                        "platforms" => [
                            0 => [
                                "id" => 3,
                                "abbreviation" => "Linux"
                            ],
                            1 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            2 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            3 => [
                                "id" => 48,
                                "abbreviation" => "PS4"
                            ],
                            4 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            5 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ],
                            6 => [
                                "id" => 203
                            ]
                        ],
                        "rating" => 88.38398769261,
                        "slug" => "celeste"
                    ],
                    5 => [
                        "id" => 36198,
                        "cover" => [
                            "id" => 117794,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2iw2.jpg"
                        ],
                        "name" => "Children of Morta",
                        "platforms" => [
                            0 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            1 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            2 => [
                                "id" => 48,
                                "abbreviation" => "PS4"
                            ],
                            3 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            4 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 66.312050048557,
                        "slug" => "children-of-morta",
                    ],
                    6 => [
                        "id" => 55173,
                        "cover" => [
                            "id" => 66841,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/tcgsewmegowbyqqmtjmn.jpg"
                        ],
                        "name" => "Semblance",
                        "platforms" => [
                            0 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            1 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            2 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 69.981290936671,
                        "slug" => "semblance",
                    ],
                    7 => [
                        "id" => 55190,
                        "cover" => [
                            "id" => 114450,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2gb6.jpg"
                        ],
                        "name" => "Pikuniku",
                        "platforms" => [
                            0 => [
                                "id" => 3,
                                "abbreviation" => "Linux"
                            ],
                            1 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            2 => [
                                "id" => 14,
                                "abbreviation" => "Mac"
                            ],
                            3 => [
                                "id" => 49,
                                "abbreviation" => "XONE"
                            ],
                            4 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 67.883994774273,
                        "slug" => "pikuniku",
                    ],
                    8 => [
                        "id" => 56033,
                        "cover" => [
                            "id" => 82165,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1red.jpg"
                        ],
                        "name" => "Dream Alone",
                        "platforms" => [
                            0 => [
                                "id" => 6,
                                "abbreviation" => "PC"
                            ],
                            1 => [
                                "id" => 130,
                                "abbreviation" => "Switch"
                            ]
                        ],
                        "rating" => 82.0,
                        "slug" => "dream-alone",
                    ],
                ],
                "slug" => "fake-super-meat-boy-forever",
                "summary" => "
      Meat Boy and Bandage Girl have grown as a couple since 2010. It seems like only yesterday the two love birds were escaping from an exploding laboratory in the sky. Now it’s the current year, and they’ve welcomed their daughter Nugget into the world. Their peaceful days enjoying life as a family came to an abrupt end when Dr. Fetus beat the snot out of them with a rusty shovel, and kidnapped Nugget! Now it’s up to Meat Boy and Bandage Girl to rescue their daughter from a lunatic fetus in a jar that can only be described as an incel version of Tony Stark. \n
       \n
      - Super Meat Boy Forever is the sequel to Super Meat Boy! This is a new experience that eclipses the original. Don’t stare directly at it unless you still have your eclipse glasses. \n
      - 7200 individually handcrafted levels combine dynamically to give you a new challenge every single time you play. Seven thousand two hundred levels. They said we couldn’t do it, but we did. Who’s they? Don’t ask. They don’t like it when you ask. \n
      - It’s hard, but fair. Nothing in life worth having comes easy. Just ask Dark Soulman. \n
      - Meat Boy and Bandage Girl can fight back. It’s time to unleash the raw fury of parenthood on their foes just like Liam Neeson in that documentary about his family vacation in Paris. \n
      - Bigger boss battles than before. Your mind will be blown. Your socks will be blown off. Team Meat is not liable for any of this. \n
      - Brand new art with stunning detail and resolution. There are a lot of pixels in here. Grab the biggest display you have and watch those dots change color rapidly with gumption. Don’t sit too close though. (If your parents aren’t home you can sit as close as you want we won’t tell, but Team Meat is still not liable for any of this.) \n
      - A soundtrack composed by Ridiculon so intense that the state of Wyoming has issued a ban on all audio devices capable of playing it out of fear that just a single note will cause the dormant super volcano beneath Yellowstone to erupt ushering in a new age of darkness. \n
      - Frame by frame artisan crafted in game animations, and animated cutscenes that will make you experience procedurally generated emotions. \n
      - A story so rich and moving that it makes Citizen Kane look like an unboxing video for a dehumidifier.
      ",
                "total_rating_count" => 7,
                "videos" => [
                    0 => [
                        "id" => 15650,
                        "game" => 44129,
                        "name" => "Trailer",
                        "video_id" => "AKjjyDUgGd8",
                        "checksum" => "96e95b25-2d45-e478-1c7b-ffe34dedd723"
                    ],
                    1 => [
                        "id" => 43592,
                        "game" => 44129,
                        "name" => "Launch Trailer",
                        "video_id" => "sbE2g_8oGfw",
                        "checksum" => "dce26249-8a54-30ab-7848-0e7d1f3e451a"
                    ]
                ],
                "websites" => [
                    0 => [
                        "id" => 82248,
                        "category" => 13,
                        "game" => 44129,
                        "trusted" => TRUE,
                        "url" => "https://store.steampowered.com/app/581660",
                        "checksum" => "41e2194d-c2e4-7a3c-e843-045b765c659f",
                    ],
                    1 => [
                        "id" => 82249,
                        "category" => 1,
                        "game" => 44129,
                        "trusted" => FALSE,
                        "url" => "http://www.supermeatboy.com",
                        "checksum" => "946fb80b-1270-30c6-f6e5-718eeaf6a394"
                    ],
                    2 => [
                        "id" => 95226,
                        "category" => 4,
                        "game" => 44129,
                        "trusted" => TRUE,
                        "url" => "https://www.facebook.com/SuperMeatBoy",
                        "checksum" => "e98eb9b9-3532-182d-1319-3e6f0ecd7196"
                    ],
                    3 => [
                        "id" => 95227,
                        "category" => 5,
                        "game" => 44129,
                        "trusted" => TRUE,
                        "url" => "https://twitter.com/supermeatboy",
                        "checksum" => "bcafa1e5-229c-f857-0757-869f10c4dbba"
                    ],
                    4 => [
                        "id" => 95228,
                        "category" => 9,
                        "game" => 44129,
                        "trusted" => TRUE,
                        "url" => "https://www.youtube.com/channel/UCNkVMGSwRmEUahBjuxFOAKw",
                        "checksum" => "9848970c-fae9-fd41-f5b5-5180bf388f16"
                    ],
                    5 => [
                        "id" => 116898,
                        "category" => 2,
                        "game" => 44129,
                        "trusted" => FALSE,
                        "url" => "https://supermeatboy.fandom.com/wiki/Super_Meat_Boy_Forever",
                        "checksum" => "dbd94a2c-0dd6-184f-0bb9-a3cd7a2b1fdb"
                    ],
                    6 => [
                        "id" => 116899,
                        "category" => 3,
                        "game" => 44129,
                        "trusted" => TRUE,
                        "url" => "https://en.wikipedia.org/wiki/Super_Meat_Boy_Forever",
                        "checksum" => "5dd3b06c-1e0b-ca52-a876-ee9c7b34bcfc"
                    ],
                    7 => [
                        "id" => 120220,
                        "category" => 16,
                        "game" => 44129,
                        "trusted" => TRUE,
                        "url" => "https://www.epicgames.com/store/en-US/product/super-meat-boy-forever/home",
                        "checksum" => "a2616f1f-7b6c-d026-ac7b-22b8d8da563c"
                    ]
                ]
            ]
        ]);
    }
}
