@extends('layouts.app')

@section('title',$profile->name.' | Home')

@section('content')
@auth
@include('includes.navbar')
<div class="container mt-70">
    <div class="row">
        {{-- Left --}}
        <div class="col-md-3 hide-mobile">
                <div class="panel sticky">
                    <div class="panel-heading text-center bg-cool-orange">
                            <a href="">
                                <img src="{{$profile->profile().'&size=80'}}" class="img-circle" alt="">
                            </a>
                            <a href="" class="elegant bold size-1 white-hover">{{$profile->name}}</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="" class="elegant bold orange-hover">Chinismis</a>
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
                    </div>
                </div>
                {{-- Partners --}}
                <div class="panel panel-default">
                    <div class="panel-heading elegant bold  bg-cool-orange">Visit our partners! Connecting dots</div>
                        <div class="panel-body text-center">
                            <div class="form-group">
                                    <a href="">
                                        <img src="{{$profile->profile().'&size=60'}}" alt="" class="img-circle"> 
                                    </a>  
                                    <a href="" class="cool-orange bold elegant-hover size-1">Pure Room</a>
                            </div>
                            <div class="form-group">
                                    <a href="">
                                        <img src="{{$profile->profile().'&size=60'}}" alt="" class="img-circle"> 
                                    </a>  
                                    <a href="" class="cool-orange bold elegant-hover size-1">Pure Ian</a>
                            </div>
                            <div class="form-group">
                                    <a href="">
                                        <img src="{{$profile->profile().'&size=60'}}" alt="" class="img-circle"> 
                                    </a>  
                                    <a href="" class="cool-orange bold elegant-hover size-1">Pure Taxi</a>
                            </div>      
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
                             <a href="" class="pull-left">
                                 <img class="media-object" src="https://www.gravatar.com/avatar/{{$user->profile()}}" alt="">
                             </a>
                             <div class="media-body">
                             <h4 class="heading"><a href="">{{$user->name}}</a></h4>
                             <p>{{$user->email}}</p>
                             </div>
                             </div>
                     @endforeach
                 @endif
        </div>
        {{-- RightMenu --}}
        <div class="col-md-3 hide-mobile">
                <div class="panel panel-default">
                    <div class="panel-heading bg-cool-orange elegant bold">Mga Chismosa <a href="">Refresh</a></div>
                        <div class="panel-body">
                                @foreach($strangers as $stranger)
                                   <div>
                                       <a href=""><img src="https://www.gravatar.com/avatar/{{$stranger->profile().'&s=50'}}" alt="" class="img-circle"></a><span class="margin-1"><button class="btn rounded-outline-btn">Follow</button></span>
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
