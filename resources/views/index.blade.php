@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">

        <!-- Popular Games -->
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <livewire:popular-games>
        <!-- End Popular Games -->

        <div class="flex flex-col lg:flex-row my-10">
            <!-- Recently Reviewed -->
            <livewire:recently-reviewed>
            <!-- End Recently Reviewed -->
            <!-- Most Anticipated & Coming Soon-->
            <div class="most-anticipated&comingSoon lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Most Anticipated
                </h2>
                <livewire:most-anticipated>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">
                    Coming Soon
                </h2>
                <livewire:coming-soon>
            </div>
            <!-- End Most Anticipated & Coming Soon -->
        </div>


    </div>
@endsection
