<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {


        return view('home', [
            'posts_v' => Post::query()->where('type', true)->latest()->take(4)->get(),
            'posts_ex' => Post::query()->where('type', false)->latest()->take(4)->get()
        ]) ; 
    }
}
