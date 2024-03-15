<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'song_name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $review = new Review();
        $review->image = $newImageName;
        $review->song_name = $request->song_name;
        $review->artist = $request->artist;
        $review->rating = $request->rating;

        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
}
