<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile(){
        // $name = $request->search;
        
        $users = User::whereNotIn('id',array(Auth::id()))->inRandomOrder()->limit(3)->get();
        $posts = Post::orderBy('created_at','desct')->where('user_id',Auth::id())->get();
        $comments = Comment::all();
        $profile = User::find(Auth::id());
        return view('users.userprofile',compact('users','profile','posts','comments'));
    }
    
}
