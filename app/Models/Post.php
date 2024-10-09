<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [] ; 

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ] ;

    public function user() : BelongsTo {
        return $this->belongsTo(User::class) ; 
    }

  

    
}
