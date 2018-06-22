@extends('layouts.app')

@section('title',$profile->name.' | Home')

@section('content')
@auth
@include('includes.navbar')
<div class="container-fluid mt-70">
    <div class="row" id="content">
        {{-- Left --}}
        <div class="col-md-3 hide-mobile sticky">
                <div class="panel">
                    <div class="panel-heading text-center">
                            <a href="">
                            <img src="{{$profile->profile()}}" class="img-circle" alt="{{$profile->name}}" height="250">
                            </a>
                            <a href="" class="elegant bold size-1">{{$profile->name}}</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="" class="elegant bold orange-hover">Chinismis</a>
                            <p class="cool-orange bold">{{count($postDetails)}}</p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="" class="elegant bold orange-hover">Following</a>
                                <p class="cool-orange bold">5</p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="" class="elegant bold orange-hover">Followers</a>
                                <p class="cool-orange bold">3.4mil</p>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <ul class="list-unstyled ml-3">
                                <li class="mb-3">
                                    <i class="far fa-newspaper newspaper"></i><a href="" class="elegant bold side-nav ml-5">My Newsfeeds</a>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-users people"></i><a href="" class="elegant bold side-nav ml-5">People nearby</a>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-camera-retro photo"></i><a href="" class="elegant bold side-nav ml-5"> Photos</a>
                                </li>
                                <li>
                                    <i class="far fa-eye-slash privacy"></i><a href="" class="elegant bold side-nav ml-5"> Privacy, Terms &amp; Agreement</a>
                                </li>
                            </ul>
                        </div>
                        <span id="google_translate_element" class="text-center"></span>
                    </div>
                    
                </div>
                
            </div>

        {{-- Middle --}}
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-body" id="panel-body">
                <form action="/publish" method="POST" id="post-form" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="row">
                                <input type="file" id="attachment" class="attachment" name="attachment">
                            <div class="col-sm-1 text-center" id="user-mini-profile">
                            <div id="profile-post">
                            <img src="{{$profile->profile()}}" class="img-circle" height="50" alt="{{$profile->name}}">
                            </div>
                            </div>
                            <div class="col-sm-11">
                                <textarea name="post" id="post" cols="1" rows="1" class="form-control" placeholder="What's on your brain?" id="text-area-post">
                                    
                                </textarea>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <label for="attachment">
                                    <span class="far fa-image post-media-icon"></span>
                                     
                                    <span id="path-preview"></span>
                                </label>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-success" id="publish-btn">Publish</button>
                                </div>
                            </div>
                        </div>   
                    </form>      
                </div>
            </div>
           
            @if(count($posts)<1)
            <h1 class="text-center">Ang lungkot ng buhay mo te!</h1>
            <div class="postDiv">

            </div>
            @else
            {{-- Post Section --}}
            <div class="alert alert-success bold alertpublish text-center" role="alert">Post published!</div>
            <div class="alert alert-success bold alertdelete text-center" role="alert">Post Deleted!</div>
            <div class="alert alert-success bold alertedit text-center" role="alert">Post Updated!</div>
            <div class="postDiv">
                @foreach($posts as $post)
                {{-- Start POST --}}
            <div class="panel panel-success post{{$post->id}}">
                
                <div class="panel-heading"> 
                        <a href="">
                            <img src="{{$profile->profile()}}" height="50" class="img-circle" alt="{{$profile->name}}"><span class="ml-1">{{$post->user->name}}</span>
                        </a> 
                        <span class="postTime{{$post->id}}'">
                            {{$post->updated_at->diffForHumans()}}
                        </span>
                        <span class="dropdown text-right">
                            @if(Auth::id() == $post->user_id)
                            <button class="btn btn-default btn-sm dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="fas fa-cogs"></span>
                            </button> 
    
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a  onclick="showEdit({{$post->id}})"><i class="fas fa-edit"></i> Edit</a></li> 
                                <li><a onclick="deletePost({{$post->id}})"><i class="fas fa-trash"></i> Delete</a></li> 
                            </ul>

                            @endif
                        </span> 
                    </div>
                    <div class="panel-body">
                        
                            <div class="text-body post-text{{$post->id}}">
                                    {{$post->post_body}}   
                            </div>
                            <textarea name="editposttext{{$post->id}}" id="editposttext" cols="1" rows="3" class="form-control editposttext{{$post->id}}">{{$post->post_body}}</textarea>
                            <button onclick="editPost({{$post->id}})" class="btn btn-sm btn-primary editpostbtn{{$post->id}}" id="editpostbtn">Save <i class="fas fa-save"></i></button>
                            <button onclick="cancelEditPost({{$post->id}})" id="cancelpostbtn" class="btn btn-sm btn-secondary cancelpostbtn{{$post->id}}">Cancel <i class="fas fa-ban"></i></button>
                        

                    @if($post->media != null)
                        <div class="img-post-container">
                        <img src="{{url('/storage/'.$post->media)}}" alt="" class="img-responsive post-img img-rounded">
                        <a href="{{$post->media}}" class="bold elegant" download>Download</a>
                        </div>
                    @endif
                    </div>
                <div class="panel-footer">

                    {{-- Check if user has already liked the post --}}
                    @if(Auth::user()->likes->contains($post->id))
                        {{-- if user has already liked, unlike button will show --}}
                        <a class="postClass{{$post->id}}" onclick="unlike({{Auth::id()}},{{$post->id}})">Unlike <i class="fas fa-heart"></i></a>
                    @else
                        {{-- if user is wala pa nag like, like button will show --}}
                        <a class="postClass{{$post->id}}" onclick="like({{Auth::id()}},{{$post->id}})">Like <i class="far fa-heart"></i></a>
                    @endif


                     {{-- Comment Section --}}
                <div class="commentDiv{{$post->id}}">

                           @foreach($comments->where('post_id',$post->id) as $comment)
                            <div class="row mt-2 mb-3">
                                <div class="col-sm-12">
                                <div class="media comment{{$comment->id}}">
                                    <div class="media-left"><a href="#">
                                        <img class="media-object img-circle" src="{{$comment->user->profile()}}" alt="" height="30"></a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" class="bold elegant">{{$comment->user->name}}</a>
                                    <div class="text-body commenttext{{$comment->id}}">
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                            <textarea name="editcommenttext{{$comment->id}}" id="editcommenttext" cols="1" rows="3" class="form-control editcommenttext{{$comment->id}}">{{$comment->comment}}</textarea>
                                            <button onclick="editComment({{$comment->id}})" class="btn btn-sm btn-primary editcommentbtn{{$comment->id}}" id="editcommentbtn">Save <i class="fas fa-save"></i></button>
                                            <button onclick="cancelEditComment({{$comment->id}})" id="cancelcommentbtn" class="btn btn-sm btn-secondary cancelcommentbtn{{$comment->id}}">Cancel <i class="fas fa-ban"></i></button>
                                        <div class="pull-right">
                                            
                                            @if(Auth::id() == $comment->user_id)
                                                <a onclick="showComment({{$comment->id}})"><i class="fas fa-edit"></i></a>
                                                <a onclick="deleteComment({{$comment->id}})"><i class="fas fa-trash"></i></a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                                   
                                @endforeach
                        {{-- Comment Form --}}
                    </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object img-circle" src="{{$profile->profile_picture}}" alt="..." height="30">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form action="" class="comment-form">
                                                <div class="form-group">
                                                        <textarea name="comment-body" class="comment-body{{$post->id}} form-control ta5" cols="65" rows="1" placeholder="Anong say mo?"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <button type="submit" id="btn-comment" class="btn btn-primary btn-sm" onclick="comment({{$post->id}})">Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            <div  class="pull-right mr-1">
                            <a href="{{url('/post/'.$post->id)}}">View Post <i class="far fa-eye"></i></a>
                            </div>
                        </div>
                        {{-- ViewPost --}}
                        
                    </div>
                    
                </div>{{-- EndPOST --}}
                 
                @endforeach
            </div>
            @endif
           
            {{-- end Middle --}}
        </div>
        {{-- RightMenu --}}
        <div class="col-md-3 hide-mobile sticky hide-tablet">
                <div class="panel panel-default">
                    <div class="panel-heading bg-cool-orange elegant bold">Mga Chismosa <a class="refresh">Refresh</a></div>
                        <div class="people-nearby">
                            @include('includes.refreshpeople')
                        </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading bg-cool-orange elegant bold">Getting bored? Checkout this awesome games!</div>
                        <div class="panel-body">
                            <p class="cool-orange bold"><i class="fas fa-gamepad"></i> Featured Games</p>
                            <a href="" class="w-100" title="The Sweet Escape Mystery Game">
                                <img src="{{asset('img/sweetescape.svg')}}" alt="The Sweet Escape" class="img-rounded w-100 shadow-hover">
                            </a>
                        </div>
                </div>

        </div>
    </div>
</div>

@endauth
@endsection
