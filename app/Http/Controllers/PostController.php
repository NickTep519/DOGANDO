<?php

namespace App\Http\Controllers;

use App\Events\PostEvent;
use App\Http\Requests\SearchPostRequest;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']) ; 
    }
    /**
     * Display a listing of the resource.
     */
    public function index( SearchPostRequest $request )
    {
        $query = Post::query() ; 

        $data = $request->validated() ; 

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
        return view('post.index', [
            'posts_v' => (clone $query)->where('type', true)->get(),
            'posts_ex' => ( clone $query)->where('type', false)->get()
        ]) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $post = new Post() ; 

        $post->fill([
            'title' => '3kg de disponible',
            'description' => '3kg de disponibles, toute personne ayant besoins veuille me contacter',
            'kg' => 3,
            'price' => 3000,
            'city_starts' => 'COTONOU',
            'city_ends' => 'YAOUNDE',
            'company' => 'Air France',
            'flight_number' => 1600,
            'type' => 1,
            'status' => 1,
            'starts_at' => now(),
            'ends_at' => now()->month(11)
        ]) ; 

        return view('post.form', [
            'post' => $post
        ])  ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        $post = new Post() ; 
        event(new PostEvent($post, $request->validated())) ; 

        return to_route('dashboard.user')->with('success', 'Vous avez créé une annonce') ; 
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]) ; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.form', [
            'post' => $post
        ]) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        event(new PostEvent($post, $request->validated())) ; 

        return to_route('dashboard.user')->with('success', 'Vous avez modifier une annonce') ; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete() ; 

        return to_route('dashboard.user')->with('success', 'L\'annonce a bien été supprimé') ; 
    }
}
