<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [] ; 

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ] ;


    public function proprietaire()
    {
        return $this->belongsTo(User::class, 'proprietaire_id');
    }

    public function expediteur()
    {
        return $this->belongsTo(User::class, 'expediteur_id');
    }

    public function voyageur()
    {
        return $this->belongsTo(User::class, 'voyageur_id');
    }

    public function offers() {

        return $this->hasMany(Offer::class) ; 
    }


    public function slug() {

        return Str::slug($this->title) ; 
    }

    public function trackingPostions() {

        return $this->hasMany(TrackingPosition::class) ; 
    }

  

    
}
