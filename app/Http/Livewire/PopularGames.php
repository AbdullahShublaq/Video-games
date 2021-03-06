<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class PopularGames extends Component
{
    public  $popularGames = [];

    /**
     *
     */
    function loadPopularGames()
    {
        $before = Carbon::now()->subYear()->timestamp;
        $after = Carbon::now()->subWeek()->timestamp;

        $popularGamesUnformatted = Cache::remember('popular-games', 7, function () use ($before, $after){
            return Http::withHeaders(config('services.igdb'))
                ->withBody("
                fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug;
                        where platforms = (48,49,130,6)
                        & (
                            first_release_date >= {$before}
                            & first_release_date < {$after}
							& total_rating_count > 5
                        );
                        sort total_rating_count desc;
                        limit 12;
            ", "text/plain"
                )->post('https://api.igdb.com/v4/games')->json();
        });

        $this->popularGames = $this->formatForView($popularGamesUnformatted);

        collect($this->popularGames)->filter(function ($game){
            return $game['rating'];
        })->each(function ($game){
            $this->emit('gameWithRatingAdded', [
                'slug' => $game['slug'],
                'rating' => $game['rating'] / 100,
                'event' => NULL
            ]);
        });
    }

    public function render()
    {
        return view('livewire.popular-games');
    }

    public function formatForView($games)
    {
        return collect($games)->map(function ($game){
            return collect($game)->merge([
                'coverImageUrl' => array_key_exists('cover', $game) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : 'https://via.placeholder.com/264x352/2d3748/FFFFFF?text=N/A',
                'rating' => isset($game['rating']) ? round($game['rating']) : '0',
                'platforms' => array_key_exists('platforms', $game) ? collect($game['platforms'])->pluck('abbreviation')->filter(function ($key, $value){
                    return $value != null && $key != null;
                })->implode(', ') : collect([])
            ]);
        })->toArray();
    }
}
