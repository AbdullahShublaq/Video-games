@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Game Details -->
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                @if(array_key_exists('cover', $game))
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                         class="w-48 hover:opacity-75 transition ease-in-out duration-150" alt="Cover">
                @else
                    <img src="/default.png" class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                         alt="Cover">
                @endif
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semi-bold text-4xl leading-tight mt-1">
                    {{ $game['name'] }}
                </h2>
                <div class="text-gray-400">
                    <span>
                        @foreach($game['genres'] as $genre)
                            {{ $genre['name'].',' }}
                        @endforeach
                    </span>
                    &middot;
                    <span>{{ $game['involved_companies'][0]['company']['name'] }}</span>
                    &middot;
                    <span>
                        @foreach($game['platforms'] as $platform)
                            @if(array_key_exists('abbreviation', $platform))
                                {{ $platform['abbreviation'] }},
                            @endif
                        @endforeach
                    </span>
                </div>
                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                @if(array_key_exists('rating', $game))
                                    {{ round($game['rating']).'%' }}
                                @else
                                    0%
                                @endif
                            </div>
                        </div>
                        <div class="ml-4 text-xs">
                            Members <br> Score
                        </div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                @if(array_key_exists('aggregated_rating', $game))
                                    {{ round($game['aggregated_rating']).'%' }}
                                @else
                                    0%
                                @endif
                            </div>
                        </div>
                        <div class="ml-4 text-xs">
                            Critic <br> Score
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                a
                            </a>
                        </div>
                    </div>
                </div>

                <p class="mt-12">
                    {{ $game['summary'] }}
                </p>

                <div class="mt-12">
                    {{--<button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-15">--}}
                    {{--<svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg>--}}
                    {{--<span class="ml-2">Play Trailer</span>--}}
                    {{--</button>--}}
                    <a href="https://youtube.com/watch/{{ $game['videos'][0]['video_id'] }}" target="_blank"
                       class="inline-flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-15">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Game Details -->
        <!-- Images Container -->
        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Images
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                @foreach($game['screenshots'] as $screenshot)
                    <div>
                        <a href="{{ Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']) }}"
                           target="_blank">
                            <img src="{{ Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']) }}"
                                 class="hover:opacity-75 transition ease-in-out duration-150" alt="screenshot">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Images Container -->
        <!-- Similar Games -->
        <div class="similar-games-container mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Similar Games
            </h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
                @foreach($game['similar_games'] as $game)
                    <div class="game mt-8">
                        <div class="relative inline-block">
                            @if(array_key_exists('cover', $game))
                                <a href="{{ route('games.show', $game['slug']) }}">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                                         class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover">
                                </a>
                            @else
                                <img src="/default.png" class="w-44 h-56 hover:opacity-75 transition ease-in-out duration-150"
                                     alt="Cover">
                            @endif
                            @if(isset($game['rating']))
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800  rounded-full"
                                     style="right: -20px; bottom:-20px">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                                        {{ round($game['rating']).'%' }}
                                    </div>
                                </div>
                            @endif
                        </div>
                        <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                            {{ $game['name'] }}
                        </a>
                        <div class="text-sm text-gray-400 mt-1">
                            @if(array_key_exists('platforms', $game))
                                @foreach($game['platforms'] as $platform)
                                    @if(array_key_exists('abbreviation', $platform))
                                        {{ $platform['abbreviation'] }},
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Similar Games -->
    </div>
@endsection