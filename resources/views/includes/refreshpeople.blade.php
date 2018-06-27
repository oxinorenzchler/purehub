<div class="panel-body">
    @foreach($users as $user)
    
        <ul class="list-inline">
            <li>
                @if($user->profile() == null)
                <a href="" class="elegant bold orange-hover"><img src="{{$user->defaultProfile()}}" class="img-circle" height="50" width="50"> {{$user->name}}</a>
                @else
                    <a href="" class="elegant bold orange-hover"><img src="{{$user->profilePath().$user->profile()}}" class="img-circle" height="50" width="50"> {{$user->name}}</a>
                @endif
            </li>
            <li class="pull-right">
                <a href="" class="btn btn-sm btn-primary">
                    Follow <i class="fas fa-user-plus"></i>
                </a>
            </li>
        </ul>
       
    @endforeach
</div>