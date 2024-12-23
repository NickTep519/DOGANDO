<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory ; 

    protected $guarded = [] ; 

    public function admin() {

        return $this->belongsTo(User::class, 'admin_id') ; 
    }
}
