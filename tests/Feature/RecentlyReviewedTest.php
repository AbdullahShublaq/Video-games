<?php

namespace Tests\Feature;

use App\Http\Livewire\RecentlyReviewed;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class RecentlyReviewedTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_recently_reviewed()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeRecentlyReviewed(),
        ]);

        Livewire::test(RecentlyReviewed::class)
            ->assertSet('recentlyReviewed', [])
            ->call('loadRecentlyReviewed')
            ->assertSee('Haven');

    }

    private function fakeRecentlyReviewed()
    {
        return Http::response([
                0 => [
                    "id" => 115427,
                    "cover" => [
                        "id" => 80153,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1puh.jpg"
                    ],
                    "first_release_date" => 1606953600,
                    "name" => "Haven",
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
                    "rating" => 79.947586727008,
                    "rating_count" => 5,
                    "slug" => "haven",
                    "summary" => "Play as two lovers who escaped to a lost planet. The only thing that matters is to stay together. A RPG to play solo or with a special someone.",
                    "total_rating_count" => 14,
                ]
            ]
        );
    }
}