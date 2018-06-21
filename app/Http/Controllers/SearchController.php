<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function postSearch(Request $request){
        $name = $request->search;
        $users = User::where('name', 'LIKE', '%'.$name.'%')->get();
        $posts = Post::orderBy('created_at','desct')->where('user_id',Auth::id())->get();
        $profile = User::find(Auth::id());
        $strangers = User::limit(3)->inRandomOrder()->skip('user_id',Auth::id())->get();
        return view('searches.searchresults',compact('users','profile','posts','strangers'));
    }
}
