<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function createOffer(Post $post) {

        if ($post->id === auth()->id()) {

            return redirect()->back()->with('success', 'Vous ne pouvez envoyé une demande à vous même') ;
        }

        $offer = Offer::create([
            'status' => 'pending',
        ]);

            /** @var Offer $offer */


        $offer->post()->associate($post) ; 
        $offer->voyageur()->associate(auth()->user()) ; 
        $offer->save() ; 

        return redirect()->back()->with('success', 'Votre demande a bien été envoyé') ;
    }


    public function showOffersForPost(Post $post) {

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

        /** @var Post $post */
        
        $offers = $post->offers() ; 

        return view('offers.index', [
            'active' => $active,
            'post' => $post,
            'user' => $user, 
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition
        ]);
    }


    public function updateOfferStatus(Request $request, Offer $offer) {

        $offer->status = $request->status ;
        $offer->save();

        if ($request->status == 'accepted') {

            // Refuse toutes les autres offres pour le même colis
            Offer::where('parcel_id', $offer->parcel_id)
                ->where('id', '!=', $offer->id)
                ->update(['status' => 'rejected']);

            // Met à jour le voyageur_id du colis
            $offer->post->update(['voyageur_id' => $offer->voyageur_id]);
        }

        return response()->json(['message' => 'Statut de l\'offre mis à jour.']);
    }


}
