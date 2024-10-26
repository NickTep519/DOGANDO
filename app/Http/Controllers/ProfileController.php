<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

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
            'profile' => false,
            'setting' => true
        ] ; 

        return view('profile.edit', [
            'user' => $request->user(),
            'active' => $active,
            'post_voyage' => $post_voyage,
            'post_expedition' => $post_expedition
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        //$request->user()->fill($request->validated());

        $user = User::find(Auth::user()->id) ; 

        $user->name = $request->validated('name') ; 
        $user->email = $request->validated('email') ; 
        $user->adress = $request->validated('adress') ; 
        $user->phone = $request->validated('phone') ; 

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null ;
        }

        //$request->user()->save() ;
        $user->save() ; 


        return Redirect::route('profile.edit')->with('status', 'profile-updated') ;
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user() ;

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
