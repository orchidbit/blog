@extends('layouts.app')

@section('content')
<div class="songgencontainer">
    <div class="greytitle2">Playlists</div>
    <p style="color: #4B5563;">My Personal recommendations of great music</p><br><br>
<div>

<div class="playlistscontainer">
    <div class="playlist">
        <div class="greytitle3">Speeding In The Rain</div>
        <div class="playlistdesc">High energy songs</div>
        <div class="playlistsong">
            <img src=/images/colorviolet.jpg>
            <div>
            <h5>The Color Violet</h5>
            <p>Tory Lanez</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/moonlight.jpg>
            <div>
            <h5>Falling</h5>
            <p>Chase Atlantic</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/heartless.jpg>
            <div>
            <h5>Heartless</h5>
            <p>The Weeknd</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/heartbeat.jpg>
            <div>
            <h5>Heartbeat</h5>
            <p>Childish Gambino</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/mindgames.jpg>
            <div>
            <h5>Mind Games</h5>
            <p>Sickick</p>
            </div>
        </div>
    </div>

    <div class="playlist">
        <div class="greytitle3">Beneath The Stars</div>
        <div class="playlistdesc">For Cozy Nights</div>
        <div class="playlistsong">
            <img src=/images/prettyboy.jpg>
            <div>
            <h5>Pretty Boy</h5>
            <p>The Neighbourhood</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/darkred.jpg>
            <div>
            <h5>Dark Red</h5>
            <p>Steve Lacy</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/alwaysforever.jpg>
            <div>
            <h5>Always Forever</h5>
            <p>The Cults</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/reflections.jpg>
            <div>
            <h5>Reflections</h5>
            <p>The Neighbourhood</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/shutupmymomscalling.jpg>
            <div>
            <h5>Shut Up My Moms Calling</h5>
            <p>Hotel Ugly</p>
            </div>
        </div>
    </div>

    <div class="playlist">
        <div class="greytitle3">Lychee Candy</div>
        <div class="playlistdesc">Sweet songs</div>
        <div class="playlistsong">
            <img src=/images/eyesore.jpg>
            <div>
            <h5>eyesore</h5>
            <p>glaive</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/upsidedown.jpg>
            <div>
            <h5>upside down</h5>
            <p>nothing,nowhere.</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/sunflower.jpg>
            <div>
            <h5>Sunflower</h5>
            <p>Rex Orange County</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/aokay.jpg>
            <div>
            <h5>A-Okay</h5>
            <p>Oliver Tree</p>
            </div>
        </div>
        <div class="playlistsong">
            <img src=/images/nobodytill.jpg>
            <div>
            <h5>You're Nobody Till Someobody Wants You Dead</h5>
            <p>Saint Motel</p>
            </div>
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