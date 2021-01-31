<div class="game mt-8">
    <div class="relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            <img src="{{ $game['coverImageUrl'] }}"
                 class="w-48 hover:opacity-75 transition ease-in-out duration-150" alt="Cover">
        </a>
        @if($game['rating'])
            <div id="{{ $game['slug'] }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                 style="right: -20px; bottom:-20px">
                @push('scripts')
                    @include('_rating', [
                        'slug' => $game['slug'],
                        'rating' => $game['rating'],
                        'event' => NULL
                    ])
                @endpush
                {{--<div class="font-semibold text-xs flex justify-center items-center h-full">--}}
                    {{--{{ $game['rating'] }}--}}
                {{--</div>--}}
            </div>
        @endif
    </div>
    <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
        {{ $game['name'] }}
    </a>
    <div class="text-sm text-gray-400 mt-1">
        {{ $game['platforms'] }}
    </div>
</div>