<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ["content","image_path" ];
    
    public function user(){ 
        return $this -> belongsTo(User::class); #userモデルに紐づいている
        
    }
    
     public function favorite_users(){ #関係性の名前
        return $this->belongsToMany(User::class,"favorites","micropost_id","user_id")->withTimestamps();
        
    }
    
    public function micropost_images(){
        return $this->hasMany(Micropost_image::class);
        
    }
    
    
    
    //
}
