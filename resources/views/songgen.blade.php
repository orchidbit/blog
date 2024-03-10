@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Song Finder
        </h1>

    </div>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        Click the button below to find a random song!
    </p>

    <button class="text-center bg-purple-400 text-gray-700 py-2 px-4 font-bold text-xl uppercase" style="border-radius: 10px">
        Generate
    </button>
</div>

@endsection