<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Deal;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = User::factory(10)->create(); 

        
        $posts = Post::factory(250)->create()->each(function($post) use ($users) {
            $post->proprietaire()->associate($users->random()); 
            $post->voyageur()->associate($users->random()) ; 
            $post->expediteur()->associate($users->random()) ; 
            $post->save(); 
        });

        $user = User::factory()->create([
                    'name'=> 'nt519',
                    'phone' => '+229 65 37 27 14',
                    'adress' => 'st J-b rue 519',
                ]) ; 

        Blog::factory(53)->create()->each(function($blogs) use ($user) {

            $blogs->admin()->associate($user) ; 
            $blogs->save() ; 

        } ) ; 

    }
}