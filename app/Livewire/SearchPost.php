<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPost extends Component
{

    public $title = ''; 
    public $kg = '' ; 
    public $price = 0 ; 
    public $city_starts = '' ; 
    public $city_ends = '' ; 

    protected $queryString = [
        'title' => ['except'=> ''],
        'kg' => ['except' => ''],
        'price' => ['except' => ''],
        'city_starts' => ['except'=> ''],
        'city_ends' => ['except' => '']
    ] ; 


    public function render()
    {

        $query = Post::where('kg', $this->kg)->
            where('price', $this->price)->    
            where('title', 'LIKE', "%{$this->title}%")-> 
            where('city_starts', 'LIKE', "%{$this->city_starts}%")-> 
            where('city_ends', 'LIKE', "%{$this->city_ends}%") ; 


        return view('livewire.search-post', [
            'posts' => $query->get(), 
        ]);
    }
}
