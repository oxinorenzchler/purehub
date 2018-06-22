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
                <h1 class="text-center">Your search for "{{Request::input('search')}}"</h1>
                @if(count($users) == 0)
                 <h3 class="text-center">No results found</h3>
                 @else
                    <p>{{count($users)}} people found</p>  
                     @foreach($users as $user)
                        <div class="media">
                             <a href="{{url('/getSearch/'.$user->id)}}" class="pull-left">
                                <img class="media-object img-circle" src="{{$user->profile()}}" alt="{{$user->name}}" height="100">
                             </a>
                             <div class="media-body">
                                <h4 class="heading"><a href="{{url('/getSearch/'.$user->id)}}">{{$user->name}}</a></h4>
                                <p>{{$user->email}}</p>
                             </div>
                        </div>
                     @endforeach
                 @endif
        </div>
        {{-- RightMenu --}}
        <div class="col-md-3 hide-mobile sticky">
                <div class="panel panel-default">
                    <div class="panel-heading bg-cool-orange elegant bold">Mga Chismosa <a href="">Refresh</a></div>
                        <div class="panel-body">
                                @foreach($strangers as $stranger)
                                   <div>
                                   <a href="{{url('/getSearch/'.$stranger->id)}}"><img src="{{$stranger->profile()}}" alt="" class="img-circle" height="40"></a><span class="margin-1"><button class="btn rounded-outline-btn">Follow</button></span>
                                        <p>{{$stranger->name}}</p>
                                   </div>
                                    
                                @endforeach
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
