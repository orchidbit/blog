@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14"
                    style="text-shadow: 0 0 5px rgba(255, 255, 255, 0.8); margin-top: 80px; margin-left: 15px;">
                    Explore A World Of Music
                </h1>
                {{-- Reference for smooth scroll: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_smooth_scroll --}}
                <a href="#section2"
                    class="homebtn border-solid border-2 border-white text-center py-2 px-4 font-bold text-xl uppercase">
                    Tune In
                </a>
            </div>
        </div>
    </div>

    <h2 id="section2" class="greytitle">
        Expand your music taste
    </h2>

    <div class="gallery">
        <div class="card">
            <a href="/blog">
                <img src="/images/heart.png">
            </a>
            <div class="card-container">
                <div class="titleandheart">
                    <h3 class="songtitle">Blog</h3>
                    <i class='fa fa-heart' style="font-size: 25px;"></i>
                </div>
                <p style="color:#4B5563;">Latest Music News</p>
                <div class="playandslider">
                    <a href="/blog"><i class="fa fa-caret-right playicon" style="font-size: 30px; color: #1D1D1B;"></i></a>
                    <input type="range" min="1" max="100" value="50" class="slider">
                </div>
            </div>
        </div>

        <div class="card">
            <a href="/songgen">
                <img src="/images/headphones.png">
            </a>
            <div class="card-container">
                <div class="titleandheart">
                    <h3 class="songtitle">Song Finder</h3>
                    <i class='fa fa-heart' style="font-size: 25px;"></i>
                </div>
                <p style="color:#4B5563;">Generate Random Songs</p>
                <div class="playandslider">
                    <a href="/songgen"><i class="fa fa-caret-right playicon" style="font-size: 30px; color: #1D1D1B;"></i></a>
                    <input type="range" min="1" max="100" value="50" class="slider">
                </div>
            </div>
        </div>

        <div class="card">
            <a href="/playlists">
                <img src="/images/weeknd.png">
            </a>
            <div class="card-container">
                <div class="titleandheart">
                    <h3 class="songtitle">Playlists</h3>
                    <i class='fa fa-heart' style="font-size: 25px;"></i>
                </div>
                <p style="color:#4B5563;">Collection Of Bangers</p>
                <div class="playandslider">
                    <a href="/playlists"><i class="fa fa-caret-right playicon" style="font-size: 30px; color: #1D1D1B;"></i></a>
                    <input type="range" min="1" max="100" value="50" class="slider">
                </div>
            </div>
        </div>

        <div class="card">
            <a href="/reviews">
                <img src="/images/hand.png">
            </a>
            <div class="card-container">
                <div class="titleandheart">
                    <h3 class="songtitle">Reviews</h3>
                    <i class='fa fa-heart' style="font-size: 25px;"></i>
                </div>
                <p style="color:#4B5563;">Song Ratings And Reviews</p>
                <div class="playandslider">
                    <a href="/reviews"><i class="fa fa-caret-right playicon" style="font-size: 30px; color: #1D1D1B;"></i></a>
                    <input type="range" min="1" max="100" value="50" class="slider">
                </div>
            </div>
        </div>
    </div>

    <h2 class="greytitle">
        Current Top Songs
    </h2>

    <div class="musiccontainer">
        <div class="vinyl">
            <img src="/images/vinyl.png">
        </div>
        <div class="songs">
            <img src="/images/colorviolet.jpg" onclick="playSong('thecolorviolet')"> <audio id="thecolorviolet" src="/images/thecolorviolet.mp3"></audio>
            <img src="/images/moonlight.jpg"  onclick="playSong('moonlight')"> <audio id="moonlight" src="/images/moonlight.mp3"></audio>
            <img src="/images/dieforyou.jpg">
            <img src="/images/doiwannaknow.jpg">
            <img src="/images/sweaterweather.jpg">
            <img src="/images/feelgoodinc.png">
        </div>
    </div>

    <div class="text-center p-5 bg-gray-400 text-white">
        <h2 class="text-2xl pb-5 text-l">
            Created By Mila
        </h2>
    </div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tutorial Reference: https://www.youtube.com/watch?v=by-3r2eqMXA
        // change image to small when scrolling
        const bg = document.querySelector('.background-image');
        const minBackgroundSize = 100;
        window.addEventListener('scroll', function() {
            const scrollAmount = window.pageYOffset;
            if (scrollAmount < 600) {
                bg.style.backgroundSize = 150 - scrollAmount / 12 + '%';
            } else {
                bg.style.backgroundSize = minBackgroundSize + '%';
            }
        })
    })

    /* Reference: https://www.w3schools.com/jsref/met_audio_play.asp */
    function playSong(songId) {
    var audio = document.getElementById(songId);
    
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
}
</script>
