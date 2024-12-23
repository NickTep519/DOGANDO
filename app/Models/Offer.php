<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [] ; 

    public function post() {

        return $this->belongsTo(Post::class) ; 
    }

    public function voyageur() {

        return $this->belongsTo(User::class, 'voyageur_id' ) ; 
    }
}
