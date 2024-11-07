<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SearchPostRequest;

class AnnoncesController extends Controller
{
    public function trajets(SearchPostRequest $request) {

        $query = Post::query() ; 

        $data = $request->validated() ; 

        if ($request->filled('title')) {
            $query->where('title', 'like', "%{$data['title']}%") ; 
        }

        if ($request->filled('kg')) {
            $query->where('kg', $data['kg']) ; 
        }
        if ($request->filled('price')) {
            $query->where('price', $data['price']) ; 
        }
        if ($request->filled('city_starts')) {
            $query->where('city_starts', 'like', "%{$data['city_starts']}%") ; 
        }
        if ($request->filled('city_ends')) {
            $query->where('city_ends', 'like', "%{$data['city_ends']}%") ; 
        }

        $posts = $query->where('status', 0)->paginate(24) ; 

        //dd($posts) ; 

        return view('post.trajets', [
            'posts' => $posts,
            'recent_posts' => Post::where('type', true)->orderBy('created_at','desc')->latest()->take(5)->get(),
        ]) ; 

    }

    public function show(string $slug, Post $post) {

        if ($slug !== $post->slug()) {

            return to_route('posts.show', ['slug' => $post->slug(), 'post' => $post]) ; 
        }

        return view('post.show', [
            'post' => $post
        ]) ; 

    }
}
