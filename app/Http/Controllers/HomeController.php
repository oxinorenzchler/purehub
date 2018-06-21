<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use App\Comment;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user()->comments()->first());
        // dd(Auth::user()->likes->contains(78));
        
        $id = Auth::id();

        $posts = Post::orderBy('created_at','desc')->get();
        $postDetails = Post::orderBy('created_at','desct')->where('user_id',Auth::id())->get();
        $comments = Comment::all();
        $users = User::whereNotIn('id',array($id))->inRandomOrder()->limit(3)->get();
        $profile = User::find($id);
        
        return view('home',compact('posts','users','profile','postDetails','comments'));
    }
}
