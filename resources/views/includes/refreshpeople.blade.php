<div class="panel-body">
    @foreach($users as $user)
    
        <ul class="list-inline">
            <li>
                <a href="" class="elegant bold orange-hover"><img src="{{$user->profile_picture}}" class="img-circle" height="50"> {{$user->name}}</a>
            </li>
            <li class="pull-right">
                <a href="" class="btn btn-sm btn-primary">
                    Follow <i class="fas fa-user-plus"></i>
                </a>
            </li>
        </ul>
       
    @endforeach
</div>