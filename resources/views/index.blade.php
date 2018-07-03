@extends('layouts.app')

@section('title','Pure Hub')

@section('content')
    <div class="landing-container container-fluid">
        <div class="row">
            <div class="col-md-6 white-text flexbox-container-left">
                <h1 class="bold text-center shadow-1">Be <span class="f-2">Awesome</span>. Join the <span class="f-2">Hub!</span></h1>
                <ul class="list-unstyled list-center">
                    <li class="shadow-1">
                        <i class="far fa-file-alt"></i>
                        See what's posts in your newsfeeds. 
                    </li>
                    <li class="shadow-1">
                        <i class="fas fa-bullhorn"></i>
                        Share your thoughts!
                    </li>
                    <li class="shadow-1">
                        <i class="fab fa-galactic-republic"></i>
                        Connect with amazing people
                    </li>
                </ul>
            </div>
            <div class="col-md-6 h-100">
                    @if (Route::has('login'))
                    <div class="text-center flexbox-container overlay">
                        <div id="logo-landing-container">
                            <a href="">
                                    <img src="{{asset('img/logo.svg')}}" class="img-responsive" alt="">
                            </a>
                        </div>
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                          
                        <div class="mt-1">
                            <a class="btn  btn-lg btn-primary" href="{{ route('login') }}" style="width:250px; border-radius:30px;">Login</a>
                        </div>
                        <span style="color:white;">- Or -</span>
                        <div>
                            <a class="btn  btn-lg btn-default" href="{{ route('register') }}" style="width:250px; border-radius:30px;">Register</a>
                        </div>
                        <div class="mt-2">
                            <a href="{{url('https://termsfeed.com/terms-conditions/e46a108c7a46182ca7101cdba76ea9c9')}}" class=" white-hover" target="_blank"> Privacy Terms &amp; Condition</a>    
                        </div>     
                        
                        @endauth
                    </div>
                    @endif
            </div>
        </div>
          
    </div>
  

@endsection

