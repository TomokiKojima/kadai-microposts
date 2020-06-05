<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    # 中間テーブルを操作する新しいアクション
    //fav,un-favに対応
    // id はpostのID
   public function store($micropostId){
        \Auth::user()->favorite($micropostId);
        return back();
        
    }
        public function destroy($micropostId){
        \Auth::user()->unfavorite($micropostId);
        return back();
        
    }
    
}
