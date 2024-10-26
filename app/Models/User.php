<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
    ];


    public function posts() : HasMany {
        return $this->hasMany(Post::class) ; 
    }

    public function messagesTo() {

        return $this->hasMany(Message::class, 'to_id') ; 
    }

    public function messagesFrom() {

        return $this->hasMany(Message::class, 'from_id') ; 
    }

    public function trackingPostions() {

        return $this->hasMany(TrackingPosition::class) ; 
    }

    public function offers() {

        return $this->hasMany(Offer::class, 'voyageur_id') ; 
    }

    public function blogs() {

        return $this->hasMany(Blog::class) ; 
    }


    public function lastMessage() {

        return Message::where(function($query) {
                
            $query->where('from_id', Auth::user()->id)->where('to_id', $this->id)  ; 

        })->orWhere(function($query) {

            $query->where('from_id', $this->id)->where('to_id', Auth::user()->id) ; 
            
        })->orderBy('created_at', 'desc')->latest()->first() ; 
    }


    public function unreadCount() {

        return $this->messagesFrom()->where('read_at', NULL)->count()  ; 
    }
}
