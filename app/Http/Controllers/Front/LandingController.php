<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landingPage () {
        $newsAll = Post::all();
        return view('landingPage', compact('newsAll'));
    }

    public function category ($category) {
        $Category = Post::where('category', $category)->get();
        return view('categoryPage', compact('Category'));
    }

    public function newsSingle ($id) {
        $newSingle = Post::find($id);
        return view('singlePage', compact('newSingle'));
    }
}
