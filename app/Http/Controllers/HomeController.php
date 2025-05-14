<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest 10 posts (or all, or paginate)
        $posts = Post::latest()->paginate(10);

        // Pass to the 'home' view
        return view('index', compact('posts'));
    }
}
