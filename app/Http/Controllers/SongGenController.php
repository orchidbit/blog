<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongGenController extends Controller
{
    public function index()
    {
        return view('songgen');
    }
}
