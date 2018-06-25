<?php

namespace App\Http\Controllers;
use App\User;
use App\Image;
use App\Gallery;
use Storage;
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

    public function changeProfile(Request $request){
        $id = Auth::id();

        $gallery = Gallery::where('user_id',$id)->first();

        $gallery_id = $gallery->id;

        // echo $gallery_id;

        $imagePath = new Image;
    
       
    // Kung my text at formData
    if($request->hasFile('attachment')){
        
        $image = $request->file('attachment'); //gets the image from form

        // $image_name = time().'.'.$image->getClientOriginalExtension();
        
        $image_name = $image->getClientOriginalName();
        // $img = Image::make($image->getRealPath());
         // $image_name = $image->getClientOriginalExtension();
        //ex. 12312356.jpg
        $destination = "users/".$id."/";
        // $img->stream();
        // UploadFIle
        // $image->move($destination, $image_name);
        Storage::disk('public')->putFileAs($destination,$image,$image_name);

        // Sore Gallery Id To Image Table
        $imagePath->gallery_id = $gallery_id;
        // Store path to Image Table
        $imagePath->path = $destination.$image_name;
        
        $imagePath->save();

        $changePP = User::find($id);

        $path =  Storage::url($destination.$image_name);

        $changePP->profile_picture = $path;

        $changePP->save();

        $data = compact('path');

        return json_encode($data);

        }
    }
}
