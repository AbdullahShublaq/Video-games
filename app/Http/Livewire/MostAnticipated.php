<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class MostAnticipated extends Component
{
    public  $mostAnticipated = [];

    function loadMostAnticipated()
    {
        $afterSixMonths = Carbon::now()->addMonths(6)->timestamp;
        $current = Carbon::now()->timestamp;

        $mostAnticipatedUnformatted = Http::withHeaders(config('services.igdb'))
            ->withBody("
                fields name, slug, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, rating_count, summary, slug;
                    where platforms = (48,49,130,6) 
                    & (
                        first_release_date >= {$current}
                        & first_release_date < {$afterSixMonths}
                    );
                    sort total_rating_count desc;
                    limit 4;
            ", "text/plain"
            )->post('https://api.igdb.com/v4/games')->json();

        $this->mostAnticipated = $this->formatForView($mostAnticipatedUnformatted);
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }

    public function formatForView($games)
    {
        return collect($games)->map(function ($game){
            return collect($game)->merge([
                'coverImageUrl' => array_key_exists('cover', $game) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : '/default.png',
                'first_release_date' => Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
