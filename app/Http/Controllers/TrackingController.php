<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\TrackingPosition;

class TrackingController extends Controller
{

    
    public function updatePosition(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'post_id' => 'required|exists:posts,id',
        ]);

        $post = Post::find($request->post_id) ; 

        if (auth()->id() !== $post->voyageur_id) {
            
            return response()->json('error', 'Seule la position du voyageur est mis à jour') ; 
        }

        $tracking_positions = TrackingPosition::updateOrCreate(
            ['user_id' => auth()->id(), 'post_id' => $request->post_id],
            ['latitude' => $request->latitude, 'longitude' => $request->longitude]
        ) ;

        return response()->json(['status' => 'Position mise à jour']);
    }



    public function getLatestPosition($post_id)
    {
        $post = Post::find($post_id) ; 

        $position = TrackingPosition::where('post_id', $post_id)
                                    ->where('user_id', $post->voyageur_id)
                                    ->latest()->first(['latitude', 'longitude']);

        return response()->json($position);
    }
}
