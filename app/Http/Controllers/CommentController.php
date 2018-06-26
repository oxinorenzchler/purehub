<?php

namespace App\Http\Controllers;
use Auth;
use App\Comment;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function postComment(Request $request){

        // Auth::user()->comments()->attach($request->postid,['comment'=>$request->comment]);
        // // echo 'Success';
        
        $user = Auth::user()->profile_picture;
        $comment = $request->comment;

        $comments = new Comment;
        $comments->user_id = Auth::id();
        $comments->post_id = $request->postid;
        $comments->comment = $comment;
        $comments->save();
        $path = $comments->user->profilePath();
        $defaultProfile = $comments->user->defaultProfile();
        $commentid = $comments->id;
        $name = $comments->user->name;
        return compact('user','comment','commentid','name','path','defaultProfile');

    }

    public function deleteComment(Request $request){

        $comment = Comment::find($request->commentid);
        $comment->delete();
        echo 'comment deleted'.$request->commentid;
    }
    
    public function editComment(Request $request){
        $text = $request->comment;
        $comment = Comment::find($request->commentid);
        $comment->comment = $text;
        $comment->save();

        return compact('text');
    }
}
