<div wire:init="loadMostAnticipated">
    @forelse($mostAnticipated as $game)
        <div class="most-anticipated-container space-y-10 mt-8">
            <x-game-card-small :game="$game"/>
        </div>
    @empty
        @foreach(range(1, 4) as $game)
            <div class="most-anticipated-container space-y-10 mt-8">
                <x-game-card-small-skeleton/>
            </div>
        @endforeach
    @endforelse
</div>