<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
          
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
            'active' => $active
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
