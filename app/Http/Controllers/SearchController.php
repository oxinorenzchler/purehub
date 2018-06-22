<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function postSearch(Request $request){
        $name = $request->search;
        $users = User::where('name', 'LIKE', '%'.$name.'%')->get();
        $postDetails = Post::orderBy('created_at','desct')->where('user_id',Auth::id())->get();
        $posts = Post::orderBy('created_at','desct')->where('user_id',Auth::id())->get();
        $profile = User::find(Auth::id());
        $strangers = User::whereNotIn('id',array(Auth::id()))->inRandomOrder()->limit(3)->get();
        return view('searches.searchresults',compact('users','profile','posts','strangers','postDetails'));
    }

    public function resultProfile($id){
        $users = User::whereNotIn('id',array(Auth::id()))->inRandomOrder()->limit(3)->get();
        $posts = Post::orderBy('created_at','desct')->where('user_id',$id)->get();
        $comments = Comment::all();
        $profile = User::find($id);
        return view('users.userhome',compact('users','profile','posts','comments'));
    }

    public function refreshPeople(){
        $users = User::whereNotIn('id',array(Auth::id()))->inRandomOrder()->limit(3)->get();
        return view('includes.refreshpeople',compact('users'));
    }
    
}
