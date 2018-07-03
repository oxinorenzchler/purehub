@extends('layouts.app')

@section('title',$profile->name.' | Gallery')

@section('content')
@auth
@include('includes.navbar')
<div class="container-fluid mt-70 vh-100">
    <div class="row vh-100 limit" id="content">
        {{-- Left --}}
        <div class="col-md-3 hide-mobile sticky hide-tablet">
                <div class="panel panel-default">
                    
                    <div class="panel-heading text-center">
                            <a href="">
                                @if($profile->profile() == null)
                                    <img src="{{url($profile->defaultProfile())}}" class="img-circle" alt="{{$profile->name}}" height="200" width="200">
                                @else
                                    <img src="{{url($profile->profilePath().$profile->profile())}}" class="img-circle" alt="{{$profile->name}}" height="200" width="200">
                                @endif
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
                                    <p class="cool-orange bold">Not Available</p>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <a href="" class="elegant bold orange-hover">Followers</a>
                                    <p class="cool-orange bold">Not Available</p>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <ul class="list-unstyled ml-3">
                                    <li class="mb-3">
                                        <i class="far fa-newspaper newspaper"></i><a href="{{url('/home')}}" class="elegant bold side-nav ml-5">News feeds</a>
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-users people"></i><a href="{{url('/people')}}" class="elegant bold side-nav ml-5">People nearby</a>
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-camera-retro photo"></i><a href="{{url('/gallery')}}" class="elegant bold side-nav ml-5"> Photos</a>
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
        <div class="col-md-6 mb-3">
            
               <div class="center-responsive">
                    
                        @foreach($gallery as $image)
                        <div class="gallery">
                            <img src="{{url($image->gallery->user->profilePath().$image->path)}}" alt="" class="img-responsive img-thumbnail gallery-image">
                        </div>  
                        @endforeach
                    
                    <div>
                        {{$gallery->links()}}
                    </div>
                     
               </div>
            
               
        </div>
        {{-- RightMenu --}}
        <div class="col-md-3 hide-mobile sticky hide-tablet">
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
