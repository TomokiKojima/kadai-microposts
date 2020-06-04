<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ["content"];
    
    public function user(){ 
        return $this -> belongsTo(User::class); #userモデルに紐づいている
        
    }
    
     public function favorite_users(){ #関係性の名前
        return $this->belongsToMany(User::class);
        
    }
    
    
    //
}
