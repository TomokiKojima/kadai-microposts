<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost_image extends Model
{
    protected $fillable = ["image_path" ];
    public function micropost(){ 
        return $this -> belongsTo(Micropost::class); #userモデルに紐づいている
    }  
}
