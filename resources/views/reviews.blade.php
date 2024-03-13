@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Reviews
        </h1>
    </div>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        Rate music
    </p>
</div>

<br><br><br>
<img src="/images/wave.png">
    <div class="footer">
        <div>
        <a href="/">Home</a>
        </div>
        <div>
        <a href="/blog">Blog</a>
        <a href="/songgen">Song Finder</a>
        <a href="/playlists">Playlists</a>
        </div>
        <div>
        <a href="/reviews">Reviews</a>
        <a href="/login">Login</a>
        <a href="/register">Register</a>
        </div>
        <div>
        <p>Created By <b>Mila</b></p>
        </div>
    </div>
@endsection