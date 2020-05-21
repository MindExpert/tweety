@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        {{-- first Panel of links --}}
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>

        {{-- Timepline Panel --}}
        <div class="lg:flex-1 lg:mx-10 lg:mb-10" style="max-width: 700px">
            @include('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
            </div>
        </div>

        {{-- friends panel --}}
        <div class="lg:w-1/6">
            @include('_friends-list')
        </div>

    </div>
@endsection
