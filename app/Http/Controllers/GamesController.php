<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //platforms = (48,49,130,6) 48->PS4, 49->XBox, 130->Switch, 6->PC
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  String $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $game = Http::withHeaders(config('services.igdb'))
            ->withBody("
                    fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating,
                    slug, involved_companies.company.name, genres.name, aggregated_rating, summary,
                    websites.*, videos.*, screenshots.*, similar_games.cover.url,
                    similar_games.name, similar_games.rating,similar_games.platforms.abbreviation, similar_games.slug;
                    where slug=\"{$slug}\";
                ", "text/plain"
            )->post('https://api.igdb.com/v4/games')->json();

        abort_if(!$game, 404);

        return view('show', [
            'game' => $this->formatGameForView($game[0])
        ]);
    }
    private function formatGameForView($game){
        return collect($game)->merge([
            'coverImageUrl' => array_key_exists('cover', $game) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : 'https://via.placeholder.com/264x352/2d3748/FFFFFF?text=N/A',
            'genres' => array_key_exists('genres', $game) ? collect($game['genres'])->pluck('name')->implode(', ') : '',
            'company' => array_key_exists('involved_companies', $game) ? $game['involved_companies'][0]['company']['name'] : NULL,
            'platforms' => array_key_exists('platforms', $game) ? collect($game['platforms'])->pluck('abbreviation')->filter(function ($key, $value){
                return $value != null && $key != null;
            })->implode(', ') : collect([]),
            'member_rating' => array_key_exists('rating', $game) ? round($game['rating']) : '0',
            'critic_rating' => array_key_exists('aggregated_rating', $game) ? round($game['aggregated_rating']) : '0',
            'trailer' => array_key_exists('videos', $game) ? "https://youtube.com/watch/{$game['videos'][0]['video_id']}" : null,
            'screenshots' => array_key_exists('screenshots', $game) ? collect($game['screenshots'])->map(function ($screenshot){
                return [
                    'big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']),
                    'huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url'])
                ];
            })->take(9): array([
                'big' => 'https://via.placeholder.com/500x250/2d3748/FFFFFF?text=N/A',
                'huge' => 'https://via.placeholder.com/1250x520/2d3748/FFFFFF?text=N/A'
            ]),
            'similarGames' => array_key_exists('similar_games', $game) ? collect($game['similar_games'])->map(function ($game) {
               return collect($game)->merge([
                   'coverImageUrl' => array_key_exists('cover', $game) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : 'https://via.placeholder.com/264x352/2d3748/FFFFFF?text=N/A',
                   'rating' => isset($game['rating']) ? round($game['rating']) : '0',
                   'platforms' => array_key_exists('platforms', $game) ? collect($game['platforms'])->pluck('abbreviation')->filter(function ($key, $value){
                       return $value != null && $key != null;
                   })->implode(', ') : collect([])
               ]);
            })->take(6) : collect([]),
            'social' => [
                'website' => collect($game['websites'])->first(),
                'facebook' => collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'facebook');
                })->first(),
                'twitter' => collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'twitter');
                })->first(),
                'instagram' => collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'instagram');
                })->first(),
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
