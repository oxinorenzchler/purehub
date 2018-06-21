<div class="col-md-3 hide-mobile">
        <div class="panel panel-default">
            <div class="panel-heading bg-cool-orange elegant bold">Mga Chismosa <a href="">Refresh</a></div>
                <div class="panel-body">
                        @foreach($users as $user)
                           <div>
                               <a href=""><img src="https://www.gravatar.com/avatar/{{md5($user->id)}}?d=monsterid&s=50" alt="" class="img-circle"></a><span class="margin-1"><button class="btn rounded-outline-btn">Follow</button></span>
                                <p>{{$user->name}}</p>
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