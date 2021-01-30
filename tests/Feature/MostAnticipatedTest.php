<?php

namespace Tests\Feature;

use App\Http\Livewire\MostAnticipated;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class MostAnticipatedTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_most_anticipated()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeMostAnticipated(),
        ]);

        Livewire::test(MostAnticipated::class)
            ->assertSet('mostAnticipated', [])
            ->call('loadMostAnticipated')
            ->assertSee('R.B.I. Baseball 21')
            ->assertSee('Monster Jam Steel Titans 2')
            ->assertSee('The Sekimeiya: Spun Glass')
            ->assertSee('Habroxia 2');

    }

    private function fakeMostAnticipated()
    {
        return Http::response([
                0 => [
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
                    "slug" => "rbi-baseball-21",
                    "summary" => "PLAY YOUR WAY. R.B.I. Baseball 21 brings incredible new features to the fast-paced arcade baseball franchise including create-a-player, play-by-play commentary, and immersive time-of-day. Step up to the plate, crush home runs, and take your club to a World Series title."
                ],
                1 => [
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
                    "slug" => "monster-jam-steel-titans-2",
                    "summary" => "More Trucks! New Worlds! Monster Jam Steel Titans 2! Monster Jam Steel Titans 2 features more fan-favorite trucks in brand new Monster Jam worlds!"
                ],
                2 => [
                    "id" => 141500,
                    "cover" => [
                        "id" => 122280,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2mco.jpg"
                    ],
                    "first_release_date" => 1617235200,
                    "name" => "The Sekimeiya: Spun Glass",
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
                    "slug" => "the-sekimeiya-spun-glass",
                    "summary" => "A mystery thriller visual novel featuring line search and jump functions."
                ],
                3 => [
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
                    "slug" => "habroxia-2",
                    "summary" => "In the aftermath of a brutal attack on Free Space, humanity sends scout ships to the star system that was at the source of the assault. But when one of the pilots doesn’t return home, it’s up to his daughter - the talented starpilot Sabrina - to find him."
                ]
            ]
        );
    }
}