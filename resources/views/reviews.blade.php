@extends('layouts.app')

@section('content')
<div class="songgencontainer">
    <div class="greytitle2">Reviews</div>
    <p style="color: #4B5563;">My reviews and ratings of songs</p><br>
<div>

<div class="reviewscontainer">
    <div class="reviewcard">
        <img src="/images/moonlightkali.png">
        <div class="reviewtitle">
            <h5>Moonlight</h5>
            <p>Kali Uchis</p>
        </div>
        <div>
            <div style="font-size: 30px"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></div>
            <div class="reviewtext">This song sounds ethereal and enchanting, as if I'm floating on fluffy clouds when listening to it.</div>
        </div>
    </div>
    <div class="reviewcard">
        <img src="/images/3nights.jpg">
        <div class="reviewtitle">
            <h5>3 Nights</h5>
            <p>Dominic Fike</p>
        </div>
        <div>
            <div style="font-size: 30px"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <div class="reviewtext">Really happy upbeat vibes, great song that anyone would enjoy.</div>
        </div>
    </div>
    <div class="reviewcard">
        <img src="/images/thelessiknowthebetter.jpg">
        <div class="reviewtitle">
            <h5>The Less I Know The Better</h5>
            <p>Tame Impale</p>
        </div>
        <div>
            <div style="font-size: 30px"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <div class="reviewtext">Unique funky tune, although can be too similar and repititive throughout.</div>
        </div>
    </div>
    <div class="reviewcard">
        <img src="/images/sunflowerspider.jpg">
        <div class="reviewtitle">
            <h5>Sunflower</h5>
            <p>Post Malone, Swae Lee</p>
        </div>
        <div>
            <div style="font-size: 30px"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></div>
            <div class="reviewtext">Such an amazing song. Reminds me of the summer. Took me a few listens to really start enjoying it.</div>
        </div>
    </div>
    <div class="reviewcard">
        <img src="/images/colorviolet.jpg">
        <div class="reviewtitle">
            <h5>The Color Violet</h5>
            <p>Tory Lanez</p>
        </div>
        <div>
            <div style="font-size: 30px"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <div class="reviewtext">This song was like love at first sight upon first hearing it. It still sounds perfect many months later.</div>
        </div>
    </div>
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