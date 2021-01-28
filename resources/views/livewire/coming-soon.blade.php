<div wire:init="loadComingSoon">
    @forelse($comingSoon as $game)
        <div class="most-anticipated-container space-y-10 mt-8">
            <div class="game flex">
                <a href="#">
                    @if(array_key_exists('cover', $game))
                        <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" class="w-16 hover:opacity-75 transition ease-in-out duration-150" alt="Cover">
                    @else
                        <img src="/default.png" class="w-16 hover:opacity-75 transition ease-in-out duration-150" alt="Cover">
                    @endif
                </a>
                <div class="ml-4">
                    <a href="#" class="hover:text-gray-300">
                        {{ $game['name'] }}
                    </a>
                    <div class="text-gray-400 text-sm mt-1">
                        {{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}
                    </div>
                </div>
            </div>
        </div>
    @empty
        @foreach(range(1, 4) as $game)
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <div class="bg-gray-800 w-16 h-20 flex-none"></div>
                    <div class="ml-4">
                        <div class="text-transparent bg-gray-700 rounded leading-tight">
                            Title goes here today
                        </div>
                        <div class="text-transparent bg-gray-700 rounded inline-block text-sm mt-2">
                            Jan 25, 2020
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
