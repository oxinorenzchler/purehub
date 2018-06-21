<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use Illuminate\Http\Request;
use App\Post;
use App\Gallery;
use App\Image as Image2;
use Storage;
use Carbon\Carbon;
class PostController extends Controller
{

    public function getPost(){
        return redirect('/home');
    }
    // Save Image
    public function postPublish(Request $request){
        $id = Auth::id();

            $gallery = Gallery::where('user_id',$id)->first();

            $gallery_id = $gallery->id;

            // echo $gallery_id;

            $imagePath = new Image2;
        
           
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

        }

    }

    //Save image path and text
    public function publishPost(Request $request){
        $id = Auth::id();
        $post = new Post;
        
        $destination = "users/".$id."/";

        if($request->img != null){
            $post->media = $destination.$request->img;
        }
        $post->post_body = $request->text;
        
        $post->user_id = $id;
        // $post->save();
        
        if($post->save()){
            $user = Post::find($post->id)->user->where('id', $id)->first();
            $picture = Auth::user()->profile_picture;
            $hash = md5($id);
            $postid = $post->id;
            $name = $post->user->name;
            $diffForHumans = $post->updated_at->diffForHumans();
            $data = compact('post','user','hash','diffForHumans','picture','name' ,'postid');
            // return compact('post','user','hash','diffForHumans','picture','name' ,'postid');
            return json_encode($data);
        }else{
            echo "nope";
        }
        
    }

    //Delete Post
    public function deletePost(Request $request){
       
        $post = Post::find($request->postid);
        $post->delete();
        echo 'delete postid'.$request->postid;
    }

    // Edit Post
    public function editPost(Request $request){
        
        $text = $request->post;
        $post = Post::find($request->postid);
        $post->post_body = $text;
        $post->save();
        $updated_at = $post->updated_at->diffForHumans();
        
        return compact('text','updated_at');
    }
}
