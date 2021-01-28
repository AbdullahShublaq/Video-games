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
        <div class="spinner mt-8"></div>
    @endforelse
</div>
