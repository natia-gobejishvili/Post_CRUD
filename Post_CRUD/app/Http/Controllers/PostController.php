<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
      //  $posts = DB::table('posts')->latest()->first();
        $posts= Post::orderBy('created_at', 'DESC')
                    ->latest()->first()->limit(5)->get();

      //  $posts = Post::where('active', 1)
      //              ->orderBy('created_at', 'DESC')
      //              ->latest()->first()->limit(5)->get();

      //  $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'category' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
            'category' => request('category'),
        ]);

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'category' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
            'category' => request('category'),
            'published_at' => request('published_at')
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
}
