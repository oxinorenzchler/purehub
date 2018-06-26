@extends('layouts.app')

@section('title',$profile->name.' | Home')

@section('content')
@auth
@include('includes.navbar')
<div class="container-fluid mt-70 vh-100">
    <div class="row" id="content">
        {{-- Left --}}
        <div class="col-md-3 hide-mobile sticky">
            <div class="panel">
                <div class="panel-heading text-center">
                        <a href="">
                        <img src="{{$profile->profile()}}" class="img-circle" alt="{{$profile->name}}" height="200" width="200">
                        </a>
                        <a href="" class="elegant bold size-1">{{$profile->name}}</a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a href="" class="elegant bold orange-hover">Posts</a>
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
            <h1 class="text-center">People nearby</h1>
                @foreach($people as $user)
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
        </div>
        {{-- RightMenu --}}
        <div class="col-md-3 hide-mobile sticky">
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
