<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserDetails
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {

            return redirect()->route('login') ;
        }
        
        $user = Auth::user() ; 

        if ( is_null($user->adress) || is_null($user->phone) ) {
            
            return redirect(RouteServiceProvider::PROFILE)->with('error', 'Veuillez compléter votre adresse et numéro de téléphone') ; 
        }

        return $next($request);
    }
}
