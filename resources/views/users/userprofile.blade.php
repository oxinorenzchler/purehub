@extends('layouts.app')

@section('title',$profile->name.' | Home')

@section('content')
@auth
@include('includes.navbar')
<div class="container-fluid mt-70 vh-100">
    <div class="row" id="content">
        {{-- Left --}}
        <div class="col-md-3 hide-mobile sticky">
            <div class="panel ">
                    <div class="panel-heading text-center">
                            <a href="">
                                    <div class="alert alert-success bold alertPP text-center" role="alert">Profile changed!</div>
                                @if($profile->profile() == null)
                                    <img src="{{url($profile->defaultProfile())}}" class="img-circle" alt="{{$profile->name}}" width="200" height="200" id="profile-picture">
                                @else
                                    <img src="{{url($profile->profilePath().$profile->profile())}}" class="img-circle" alt="{{$profile->name}}" height="200" width="200" id="profile-picture">
                                @endif
                            </a>
                            <form action="" id="profile-picture-form" method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                    <input type="file" id="attachment" class="attachment" name="attachment">
                                    <label for="attachment">
                                        <span class="far fa-image post-media-icon"></span>
                                        <span id="path-preview"></span>
                                    </label>
                               </div>
                                <button class="btn btn-md btn-primary mt-1" id="profile-picture-btn"><i class="fas fa-camera-retro"></i> Change</button>
                            </form>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="" class="elegant bold orange-hover">Posts</a>
                            <p class="cool-orange bold">{{count($posts)}}</p>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="elegant bold orange-hover">Following</a>
                                <p class="cool-orange bold">5</p>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="elegant bold orange-hover">Followers</a>
                                <p class="cool-orange bold">1.4mil</p>
                            </div>
                        </div>
                        <h3 class="elegant bold">{{$profile->name}}</h3>
                        <button class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Edit</button>
                        <p>
                            <i class="fas fa-briefcase"></i>
                            @if($profile->work != null)
                                <span class="work">{{$profile->work}}</span>
                            @else
                                <span class="work">Do you have a life?</span>
                            @endif
                        </p>
                        <p>
                            <i class="fas fa-location-arrow"></i>
                            @if($profile->address != null)
                                <span class="address">{{$profile->address}}</span>
                            @else
                                <span class="address">Where are you from?</span>
                            @endif
                        </p>
                        <p>
                            <i class="fas fa-pencil-alt"></i>
                            @if($profile->bio != null)
                                <span class="bio">{{$profile->bio}}</span>
                            @else
                                <span class="bio">Tell us about yourself?</span>
                            @endif
                        </p>
                        <p>
                            <i class="far fa-calendar-alt"></i>                         
                            Joined  {{  date("M d Y", strtotime($profile->created_at)) }}
                        </p>
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
                                    @if($profile->profile() == null)
                                        <img src="{{url($profile->defaultProfile())}}" alt="{{$profile->name}}" class="img-circle w-100" height="40">
                                    @else
                                        <img src="{{url($profile->profilePath().$profile->profile())}}" class="img-circle w-100" height="40" alt="{{$profile->name}}">
                                    @endif
                                    
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
                                @if($post->user->profile() == null)
                                    <img src="{{$post->user->defaultProfile()}}" class="img-circle" alt="{{$post->user->name}}" width="40" height="40">
                                @else
                                    <img src="{{url($post->user->profilePath().$post->user->profile())}}" class="img-circle" width="40" height="40" alt="{{$post->user->name}}"><span class="ml-1">{{$post->user->name}}</span>
                                @endif
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
                                <img src="{{url($post->user->profilePath().$post->media)}}" alt="" class="img-responsive post-img img-rounded">
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
                                            <a>
                                            @if($comment->user->profile() == null)
                                                <img class="media-object img-circle" src="{{url($comment->user->defaultProfile())}}" alt="{{$comment->user->name}}" height="30" width="30">
                                            @else
                                                <img class="media-object img-circle" src="{{$comment->user->profilePath().$comment->user->profile()}}" alt="{{$comment->user->name}}" height="30" width="30">
                                            @endif
                                             </a>
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
                                                    <a onclick="showComment({{$comment->id}})" class="mr-1"><i class="fas fa-edit"></i></a>
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
                                                    @if($profile->profile() == null)
                                                        <img class="media-object img-circle" src="{{$profile->defaultProfile()}}" alt="{{$profile->name}}" height="30" width="30">
                                                    @else
                                                        <img class="media-object img-circle" src="{{$profile->profilePath().$profile->profile()}}" alt="{{$profile->name}}" height="30" width="30">
                                                    @endif
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
                    <div class="panel-heading elegant bold">Mga Chismosa <a class="refresh pull-right">Refresh</a></div>
                        <div class="people-nearby">
                            @include('includes.refreshpeople')
                        </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading elegant bold">Getting bored? Checkout this awesome games!</div>
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
