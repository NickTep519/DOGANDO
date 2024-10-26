<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function user() {

        $post_voyage = Post::query()->where('status', 0)
                            ->where('voyageur_id', auth()->id())
                            ->latest()->first() ; 

        $post_expedition = Post::query()->where('status', 0)
                          ->where('proprietaire_id', auth()->id())
                          ->latest()->first() ;   
        
        //dd($post_expedition) ; 
        

        $active = [
            'user' => true,
            'voyage' => false,
            'expedition' => false,
            'deal' => false,
            'profile' => false,
            'setting' => false
        ] ; 

        $user = Auth::user() ; 

        $notifications = $user->notifaications ; 


        $action_voyage = Post::where('type', true)->where('proprietaire_id', $user->id)->count() ; 
        $action_expedition = Post::where('type', false)->where('proprietaire_id', $user->id)->count() ;
        $total_action = Post::where('proprietaire_id', $user->id)->count() ; 

        return view('dashboard.user', [
            'user' => $user,
            'active' => $active,
            'total_action' => $total_action,
            'action_voyage' => $action_voyage,
            'action_expedition' => $action_expedition,
            'notifications' => $notifications,
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition

        ]) ; 
    }

    public function voyage() {

        $post_voyage = Post::query()->where('status', 0)
                                    ->where('voyageur_id', auth()->id())
                                    ->latest()->first() ; 

        $post_expedition = Post::query()->where('status', 0)
                                        ->where('proprietaire_id', auth()->id())
                                        ->latest()->first() ;  

        $active = [
            'user' => false,
            'voyage' => true,
            'expedition' => false,
            'deal' => false,
            'profile' => false,
            'setting' => false
        ] ; 

        $user = Auth::user() ; 

        $query = Post::where('proprietaire_id', $user->id )->where('type', true) ; 
        $voyages =  $query->count() ; 
        $posts = $query->orderBy('created_at', 'desc')->get() ; 

        return view('dashboard.voyage', [
            'user' => $user,
            'active' => $active,
            'posts' => $posts, 
            'voyages' => $voyages,
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition
        ]) ; 
    }

    public function expedition() {

        $post_voyage = Post::query()->where('status', 0)
                                    ->where('voyageur_id', auth()->id())
                                    ->latest()->first() ; 

        $post_expedition = Post::query()->where('status', 0)
                                    ->where('proprietaire_id', auth()->id())
                                    ->latest()->first() ; 
        
        $active = [
            'user' => false,
            'voyage' => false,
            'expedition' => true,
            'deal' => false,
            'profile' => false,
            'setting' => false,
        ] ; 

        $user = Auth::user() ; 

        $query = Post::where('proprietaire_id', $user->id )->where('type', false) ; 
        $expeditions =  $query->count() ; 
        $posts = $query->orderBy('created_at', 'desc')->get() ; 

        return view('dashboard.expedition', [
            'user' => $user,
            'active' => $active,
            'expeditions' => $expeditions,
            'posts' => $posts,
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition
        ]) ; 
    }



    public function profile() {

        $post_voyage = Post::query()->where('status', 0)
                                    ->where('voyageur_id', auth()->id())
                                    ->latest()->first() ; 

        $post_expedition = Post::query()->where('status', 0)
                                        ->where('proprietaire_id', auth()->id())
                                        ->latest()->first() ; 
        
        $active = [
            'user' => false,
            'voyage' => false,
            'expedition' => false,
            'deal' => false,
            'profile' => true,
            'setting' => false
        ] ; 

        $user = Auth::user() ;

        return view('dashboard.profile', [
            'user' => $user,
            'active' => $active,
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition
        ]) ; 
    }

    public function details(Post $post) {

        $post_voyage = Post::query()->where('status', 0)
                                    ->where('voyageur_id', auth()->id())
                                    ->latest()->first() ; 

        $post_expedition = Post::query()->where('status', 0)
                                        ->where('proprietaire_id', auth()->id())
                                        ->latest()->first() ; 

        $user = Auth::user() ;


        $active = [
            'user' => false,
            'voyage' => true,
            'expedition' => false,
            'deal' => false,
            'profile' => false,
            'setting' => false
        ] ; 
        
        return view('dashboard.details', [
            'user' => $user,
            'active' => $active,
            'post' => $post,
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition
        ]) ; 
    }

}