<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
class ImageController extends Controller
{
    public function getGallery(){
        $gallery = Image::orderBy('created_at','desc')->where('gallery_id',4)->paginate(10);
        // $image = Storage::url($post->media);
        $postDetails = Post::orderBy('created_at','desc')->where('user_id',Auth::id())->get();
        $profile = User::find(Auth::id());
        $users = User::whereNotIn('id',array(Auth::id()))->inRandomOrder()->limit(3)->get();

        return view('users.gallery',compact('gallery','postDetails','profile','users'));

    }
}
