<?php

namespace Tests\Feature;

use App\Http\Livewire\PopularGames;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class PopularGamesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_popular_games()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakePopularGames(),
        ]);

        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [])
            ->call('loadPopularGames')
            ->assertSee('Immortals Fenyx Rising: A New God')
            ->assertSee('Teratopia')
            ->assertSee('Habroxia 2')
            ->assertSee('Colossus Down');;
    }

    private function fakePopularGames()
    {
        return Http::response([
                0 => [
                    "id" => 142848,
                    "cover" => [
                        "id" => 125848,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2p3s.jpg"
                    ],
                    "first_release_date" => 1611792000,
                    "name" => "Immortals Fenyx Rising: A New God",
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
                        ],
                        4 => [
                            "id" => 167,
                            "abbreviation" => "PS5"
                        ],
                        5 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ]
                    ],
                    "slug" => "immortals-fenyx-rising-a-new-god"
                ],
                1 => [
                    "id" => 142825,
                    "cover" => [
                        "id" => 125685,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2oz9.jpg"
                    ],
                    "first_release_date" => 1615852800,
                    "name" => "R.B.I. Baseball 21",
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
                    "slug" => "rbi-baseball-21"
                ],
                2 => [
                    "id" => 142641,
                    "cover" => [
                        "id" => 125169,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2okx.jpg"
                    ],
                    "first_release_date" => 1611100800,
                    "name" => "Teratopia",
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
                    "slug" => "teratopia"
                ],
                3 => [
                    "id" => 142603,
                    "cover" => [
                        "id" => 125388,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2or0.jpg"
                    ],
                    "first_release_date" => 1614643200,
                    "name" => "Monster Jam Steel Titans 2",
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
                        ],
                        4 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ],
                        5 => [
                            "id" => 203
                        ]
                    ],
                    "slug" => "monster-jam-steel-titans-2"
                ],
                4 => [
                    "id" => 141326,
                    "cover" => [
                        "id" => 120964,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2lc4.jpg"
                    ],
                    "first_release_date" => 1612310400,
                    "name" => "Habroxia 2",
                    "platforms" => [
                        0 => [
                            "id" => 6,
                            "abbreviation" => "PC"
                        ],
                        1 => [
                            "id" => 46,
                            "abbreviation" => "Vita"
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
                    "slug" => "habroxia-2"
                ],
                5 => [
                    "id" => 141241,
                    "cover" => [
                        "id" => 120661,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2l3p.jpg"
                    ],
                    "first_release_date" => 1615420800,
                    "name" => "Monster Energy Supercross - The Official Videogame 4",
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
                        ],
                        4 => [
                            "id" => 167,
                            "abbreviation" => "PS5"
                        ],
                        5 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ],
                        6 => [
                            "id" => 170,
                            "abbreviation" => "Stadia"
                        ]
                    ],
                    "slug" => "monster-energy-supercross-the-official-videogame-4"
                ],
                6 => [
                    "id" => 141207,
                    "cover" => [
                        "id" => 120511,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2kzj.jpg"
                    ],
                    "first_release_date" => 1611878400,
                    "name" => "Gods Will Fall",
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
                        ],
                        4 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ],
                        5 => [
                            "id" => 170,
                            "abbreviation" => "Stadia"
                        ]
                    ],
                    "slug" => "gods-will-fall"
                ],
                7 => [
                    "id" => 140974,
                    "cover" => [
                        "id" => 125063,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ohz.jpg"
                    ],
                    "first_release_date" => 1606867200,
                    "name" => "Fortnite: Chapter 2 - Season 5",
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
                            "id" => 45,
                            "abbreviation" => "psn"
                        ],
                        5 => [
                            "id" => 48,
                            "abbreviation" => "PS4"
                        ],
                        6 => [
                            "id" => 49,
                            "abbreviation" => "XONE"
                        ],
                        7 => [
                            "id" => 130,
                            "abbreviation" => "Switch"
                        ],
                        8 => [
                            "id" => 167,
                            "abbreviation" => "PS5"
                        ],
                        9 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ]
                    ],
                    "slug" => "fortnite-chapter-2-season-5"
                ],
                8 => [
                    "id" => 140641,
                    "cover" => [
                        "id" => 118927,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2jrj.jpg"
                    ],
                    "first_release_date" => 1611792000,
                    "name" => "Colossus Down",
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
                        ],
                        4 => [
                            "id" => 167,
                            "abbreviation" => "PS5"
                        ],
                        5 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ]
                    ],
                    "slug" => "colossus-down"
                ],
                9 => [
                    "id" => 139859,
                    "cover" => [
                        "id" => 120427,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2kx7.jpg"
                    ],
                    "first_release_date" => 1606953600,
                    "name" => "Immortals Fenyx Rising: Gold Edition",
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
                        ],
                        4 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ]
                    ],
                    "slug" => "immortals-fenyx-rising-gold-edition"
                ],
                10 => [
                    "id" => 138858,
                    "cover" => [
                        "id" => 124775,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2o9z.jpg"
                    ],
                    "first_release_date" => 1611187200,
                    "name" => "ENDER LILIES: Quietus of the Knights",
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
                    "slug" => "ender-lilies-quietus-of-the-knights"
                ],
                11 => [
                    "id" => 138785,
                    "cover" => [
                        "id" => 121027,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ldv.jpg"
                    ],
                    "first_release_date" => 1607040000,
                    "name" => "DARQ: Complete Edition",
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
                        ],
                        4 => [
                            "id" => 167,
                            "abbreviation" => "PS5"
                        ],
                        5 => [
                            "id" => 169,
                            "abbreviation" => "Series X"
                        ]
                    ],
                    "slug" => "darq-complete-edition"
                ]
            ]
        );
    }
}