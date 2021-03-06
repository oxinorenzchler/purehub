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
                        <p class="cool-orange bold">50</p>
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