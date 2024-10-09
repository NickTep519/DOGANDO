<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function user() {

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


        $action_voyage = Post::where('type', true)->where('user_id', $user->id)->count() ; 
        $action_expedition = Post::where('type', false)->where('user_id', $user->id)->count() ;
        $total_action = Post::where('user_id', $user->id)->count() ; 

        return view('dashboard.user', [
            'user' => $user,
            'active' => $active,
            'total_action' => $total_action,
            'action_voyage' => $action_voyage,
            'action_expedition' => $action_expedition,
            'notifications' => $notifications

        ]) ; 
    }

    public function voyage() {

        
        $active = [
            'user' => false,
            'voyage' => true,
            'expedition' => false,
            'deal' => false,
            'profile' => false,
            'setting' => false
        ] ; 

        $user = Auth::user() ; 

        $query = Post::where('user_id', $user->id )->where('type', true) ; 
        $voyages =  $query->count() ; 
        $posts = $query->orderBy('created_at', 'desc')->get() ; 

        return view('dashboard.voyage', [
            'user' => $user,
            'active' => $active,
            'posts' => $posts, 
            'voyages' => $voyages
        ]) ; 
    }

    public function expedition() {

        
        $active = [
            'user' => false,
            'voyage' => false,
            'expedition' => true,
            'deal' => false,
            'profile' => false,
            'setting' => false,
        ] ; 

        $user = Auth::user() ; 

        $query = Post::where('user_id', $user->id )->where('type', false) ; 
        $expeditions =  $query->count() ; 
        $posts = $query->orderBy('created_at', 'desc')->get() ; 

        return view('dashboard.expedition', [
            'user' => $user,
            'active' => $active,
            'expeditions' => $expeditions,
            'posts' => $posts
        ]) ; 
    }



    public function profile() {

        
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
            'active' => $active
        ]) ; 
    }

}