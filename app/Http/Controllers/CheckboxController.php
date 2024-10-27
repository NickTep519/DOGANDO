<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CheckboxController extends Controller
{
    public function updateCheckboxStatus(Request $request){

        $post = Post::find($request->id);

        if ($post) {
            $post->status = $request->checked ;
            $post->save();

            return response()->json(['success' => 'Statut de la checkbox mis à jour']);
        }

        return response()->json(['error' => 'Post non trouvé'], 404);
    }

}
