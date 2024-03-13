@extends('layouts.app')

@php
    $trackIds = [
        // 27 songs
    '0EfsDEYaSjGYd66Pr881nq', // Cry Baby - The Neighbourhood
    '2qyhy9ndo8tTGMzXeHTisR', // So High - Doja Cat
    '7kJJcoJmbN0CnsYoT9VDyB', // Falling - Chase Atlantic
    '6K4t31amVTZDgR3sKmwUJJ', // The Less I Know The Better - Tame Impale
    '6TaqooOXAEcijL6G1AWS2K', // All My Friends - Snake Hips
    '4kV4N9D1iKVxx1KLvtTpjS', // break up with ur girlfriend, i'm bored - Ariana Grande
    '3USxtqRwSYz57Ewm6wWRMp', // Heat Waves - Glass Animals
    '2AT8iROs4FQueDv2c8q2KE', // R U Mine? - Arctic Monkeys
    '5naar7XewEOAjOywIp6Jjq', // Remember When - Wallows
    '6dBUzqjtbnIa1TwYbyw5CM', // Lovers Rock - TV Girl
    '5NvOZCjZaGGGL597exlQWv', // Line Without a Hook - Ricky Montgomery
    '3CRDbSIZ4r5MsZ0YwxuEkn', // Stressed Out - Twenty One Pilots
    '5CM4UuQ9Gnd6K2YyKGPMoK', // Bad Habit - Steve Lacy
    '6KfoDhO4XUWSbnyKjNp9c4', // Maniac - Conan Gray
    '6EThJr4Dq1Y93JspecGU2F', // Cigarette Daydreams - Cage The Elephant
    '1RKUoGiLEbcXN4GY4spQDx', // Clint Eastwood - Gorillaz
    '02tvc9CFnTyHuSRlGeNv9w', // Corduroy Dreams - Rex Orange County
    '594LPcjlKVc2REPZY51IJO', // MORBID MIND - Jack Kays
    '122OgRFuc9yZEscKx1kzRl', // Circulation - Hotel Mira
    '3znD2JTezT8ZLkp2pmft2l', // Talk to Me - Cavetown
    '110NFrhyUhxxRmMCTdzF2R', // Portland - Bowling Shoes
    '5EYi2rH4LYs6M21ZLOyQTx', // Loving is Easy - Rex Orange County
    '0cQVqPuHQP4KEwc7ZUQmj6', // Sweater Weather - The Neighbourhood
    '7d8GetOsjbxYnlo6Y9e5Kw', // Mr. Brightside - The Killers
    '0rRjGruFonCGOt0S5zAJNQ', // The Other Side Of Paradise - Glass Animals
    '4lvJOtynZbT08pZO10YoOv', // BITE - Troye Sivan
    '5t5ExTaqlvKliTz1spJV8K', // Awkward Conversations - The Front Bottoms
    ];
@endphp

@section('content')
    <script>
        // Reference: Change src of an iframe: https://stackoverflow.com/questions/3730159/changing-iframe-src-with-javascript
        function playRandomSong(trackIds) {
            var randomIndex = Math.floor(Math.random() * trackIds.length);
            var randomTrackId = trackIds[randomIndex];
            var iframe = document.getElementById('spotify-embed');
            iframe.src = 'https://open.spotify.com/embed/track/' + randomTrackId + '?utm_source=generator';
        }
    </script>

    <div class="songgencontainer">
        <div class="greytitle2">Song Finder</div>

        <p style="color: #4B5563;">Click the button below to find a random song!</p>

        {{-- Reference for json-encode: https://www.w3schools.com/php/func_json_encode.asp#:~:text=The%20json_encode()%20function%20is,a%20value%20to%20JSON%20format. --}}
        <button onclick="playRandomSong({{ json_encode($trackIds) }})" class="genbtn">
            Generate
        </button>
        <iframe id="spotify-embed" style="border-radius: 12px; margin: 0 auto; display: block;"
            src="https://open.spotify.com/embed/track/{{ $trackIds[0] }}?utm_source=generator" width="50%" height="352"
            frameBorder="0" allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        <br><br><br><br><br>
    </div>

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
