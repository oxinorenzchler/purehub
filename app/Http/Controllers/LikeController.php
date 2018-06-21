<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function postLike(Request $request){
        
        
       if(Auth::user()->likes->contains($request->post_id)){
            
       }else{
            Auth::user()->likes()->attach($request->post_id);
       }
      
    }

    public function postDislike(Request $request){
        if(Auth::user()->likes->contains($request->post_id)){
            Auth::user()->likes()->detach($request->post_id);
        }
    }
}
