@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Game Details -->
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="/avatar.jpg" alt="cover">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semi-bold text-4xl leading-tight mt-1">
                    Game Name
                </h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>
                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                90%
                            </div>
                        </div>
                        <div class="ml-4 text-xs">
                            Members <br> Score
                        </div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                90%
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab amet atque aut, cumque cupiditate delectus eius facilis id iste magni nesciunt, nisi nobis pariatur qui quod rem sequi, sit tempore voluptatibus. Aliquam beatae consectetur dolore, explicabo laborum obcaecati odio pariatur praesentium quasi quia. Accusantium ea incidunt ipsam possimus totam.
                </p>

                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-15">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
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
                <div>
                    <a href="#">
                        <img src="/avatar.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="screenshot">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Images Container -->
        <!-- Similar Games -->
        <div class="similar-games-container mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Similar Games
            </h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/avatar.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800  rounded-full" style="right: -20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Name of Game
                    </a>
                    <div class="text-sm text-gray-400 mt-1">
                        Playstation 4
                    </div>
                </div>
            </div>
        </div>
        <!-- End Similar Games -->
    </div>
@endsection