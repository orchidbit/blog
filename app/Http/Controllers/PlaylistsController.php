<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function index()
    {
        return view('playlists');
    }
}
