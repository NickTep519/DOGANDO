<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    

    public function slug() {

        return Str::slug($this->title) ; 
    }

  

    
}
