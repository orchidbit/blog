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
            <img src="/images/heart.png">
            <div class="card-container">
                <h4><b>Blog</b></h4>
                <p>Lorem Ipsum</p>
            </div>
        </div>
        <div class="card">
            <img src="/images/headphones.png">
            <div class="card-container">
                <h4><b>Song Finder</b></h4>
                <p>Lorem Ipsum</p>
            </div>
        </div>
        <div class="card">
            <img src="/images/weeknd.png">
            <div class="card-container">
                <h4><b>Playlists</b></h4>
                <p>Lorem Ipsum</p>
            </div>
        </div>
        <div class="card">
            <img src="/images/hand.png">
            <div class="card-container">
                <h4><b>Reviews</b></h4>
                <p>Lorem Ipsum</p>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to expand your music taste?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos
                molestias porro vero. Vel alias.
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos
            temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa
                    laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi
                    ex? Nemo hic placeat et?
                </h3>

                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
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
</script>
