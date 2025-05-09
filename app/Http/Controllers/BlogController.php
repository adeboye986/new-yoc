<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
                     ->latest()
                     ->with(['category', 'author', 'tags']) // eager load relations
                     ->paginate(10);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
                    ->where('status', 'published')
                    ->firstOrFail();

        $popularPosts = Post::orderBy('views', 'desc')->take(5)->get();

        return view('blog.post', compact('post', 'popularPosts'));
    }
}
