<?php

namespace Tests\Feature;

use App\Http\Livewire\ComingSoon;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class ComingSoonTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_coming_soon()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeComingSoon(),
        ]);

        Livewire::test(ComingSoon::class)
            ->assertSet('comingSoon', [])
            ->call('loadComingSoon')
            ->assertSee('Super Meat Boy Forever');

    }

    private function fakeComingSoon()
    {
        return Http::response([
                0 => [
                    "id" => 44129,
                    "cover" => [
                        "id" => 123667,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2nf7.jpg"
                    ],
                    "first_release_date" => 1640908800,
                    "name" => "Super Meat Boy Forever",
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
                    "slug" => "super-meat-boy-forever",
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
                    "total_rating_count" => 7
                ]
            ]
        );
    }
}