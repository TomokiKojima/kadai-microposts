<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Storage;
class MicropostsController extends Controller
{

    //
    
    public function index(){
        $data = [];
        
        if (\Auth::check()){
            $user = \Auth::user();
            $microposts = $user -> feed_microposts()->orderBy("created_at","desc") ->paginate(10);
            $data = ["user" => $user,
            "microposts" => $microposts
                ];
        }
        return view("welcome",$data);
    }
    
    public function store(Request $request){
        $request->validate([
            "content"=>"required|max:255",
            
            ]);
      
// dd($request->user()->microposts());
        $mp =  $request->user()->microposts()->create([
                     "content" => $request ->content
                    
                     ]) ;
      
        if ($request->images != null){
      
           foreach($request->images as $image ){
           // $path = Storage::disk('s3')->putFile('images', $image,"public");
            // $path = Storage::disk('s3')->url($path);
               
                $path = $image->store('public');
                $path = explode("/",$path)[1];
               $mp->micropost_images()->create(["image_path" => $path]);
            //   dd($path);
           }
        }
        // dd($request->images);
        //dd($path);
        // dd($mp);
        return back();
        
    }
    public function destroy($id){
        $micropost = \App\Micropost::findOrFail($id);
        if (\Auth::id() === $micropost->user_id){
            $micropost->delete();
        }
        
        return back();
        
    }
    
    public function show($id){
        $user = User::findOrFail($id);
        
        $user->loadRelationshipCounts();
        
        $microposts = $user->microposts()->orderBy("created_at","desc")->paginate(10);
        
        return view("users.show",[
            "user"=>$user,
            "microposts" => $microposts
            ]
            
            );
        
        
        
    }
    
    
    
}
