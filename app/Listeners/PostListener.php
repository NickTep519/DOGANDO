<?php

namespace App\Listeners;

use App\Models\Post;
use App\Events\PostEvent;
use App\Notifications\PostNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostEvent $event): void
    {
        if ($event->post->exists) {
            $event->post->update($event->data) ; 

            $user = Auth::user() ; 

            /** @var User $user */
    
            $user->notify(new PostNotification($event->post)) ; 

        } else {

            /** @var User $user */

            $user = Auth::user() ; 
            
            $post = Post::create($event->data) ; 

            $post->proprietaire()->associate($user) ; 
            
            if ($event->data['type']) {

                $post->voyageur()->associate($user) ; 

            } else {

                $post->expediteur()->associate($user) ; 
            }
            
            $post->save() ; 
           
            $user->notify(new PostNotification($post)) ; 

        }

     
        
       
    }
}
