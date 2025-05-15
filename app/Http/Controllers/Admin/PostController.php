<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category', 'tags', 'author')
                 ->orderBy('created_at', 'desc')
                 ->get();

    $totalPosts = Post::count();
    $publishedPosts = Post::where('status', 'published')->count();
    $draftPosts = Post::where('status', 'draft')->count();
    $pendingPosts = Post::where('status', 'pending')->count();
    $totalViews = Post::sum('views');

    return view('admin.posts.posts', compact(
        'posts', 'totalPosts', 'publishedPosts', 'draftPosts', 'pendingPosts', 'totalViews'
    ));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $categories = Category::all();
            $tags = Tag::all();
            return view('admin.posts.form', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags'        => 'nullable|array',
            'tags.*'      => 'exists:tags,id',
            'image'       => 'nullable|image|mimes:jpg,png|max:2048',
            'status'      => 'required|in:draft,pending,published',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts','public');
        }

        $data['author_id'] = auth()->id() ?? 1; // fallback author

        $post = Post::create($data);
        $post->tags()->sync($data['tags'] ?? []);


        return redirect()->route('admin.posts.index')
                         ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
    $tags = Tag::all();
    return view('admin.posts.form', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags'        => 'nullable|array',
            'tags.*'      => 'exists:tags,id',
            'image'       => 'nullable|image|mimes:jpg,png|max:2048',
            'status'      => 'required|in:draft,pending,published',
        ]);

        if ($request->hasFile('image')) {
            // optional: delete old one
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('posts','public');
        }

        $post->update($data);
        $post->tags()->sync($data['tags'] ?? []);

        return redirect()->route('posts.index')
                         ->with('success','Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();

        return back()->with('success','Post deleted successfully.');
    }

//     public function showPopularPosts()
// {
//     $popularPosts = Post::where('status', 'popular')->get(); // Assuming 'popular' is a status
//     return view('admin.posts.popular', compact('popularPosts'));
// }

public function showDraftsPosts()
{
    $draftPosts = Post::where('status', 'draft')->get();
    // Assuming you want to show the draft posts in the view
    $totalPosts = Post::count();
    $publishedPosts = Post::where('status', 'published')->count();
    $draftCount = Post::where('status', 'draft')->count();
    $pendingPosts = Post::where('status', 'pending')->count();
    $totalViews = Post::sum('views');
    return view('admin.posts.draft', compact('draftPosts', 'totalPosts', 'publishedPosts', 'draftCount', 'pendingPosts', 'totalViews'
));
}

public function showPublishedPosts()
{
    $publishedPosts = Post::where('status', 'published')->get();

     $totalPosts = Post::count();
    $publishedCount = Post::where('status', 'published')->count();
    $draftPosts = Post::where('status', 'draft')->count();
    $pendingPosts = Post::where('status', 'pending')->count();
    $totalViews = Post::sum('views');

    return view('admin.posts.published', compact('publishedPosts', 'totalPosts', 'publishedCount', 'draftPosts', 'pendingPosts', 'totalViews'
));
}

public function showPendingPosts()
{
    $pendingPosts = Post::where('status', 'pending')->get();

     $totalPosts = Post::count();
    $publishedPosts = Post::where('status', 'published')->count();
    $draftPosts = Post::where('status', 'draft')->count();
    $pendingCount = Post::where('status', 'pending')->count();
    $totalViews = Post::sum('views');

    return view('admin.posts.pending', compact('pendingPosts', 'totalPosts', 'publishedPosts', 'draftPosts', 'pendingCount', 'totalViews'
));
}

}
