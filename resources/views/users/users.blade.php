@if (count($users) > 0 )
<ul class = "list-unstyled"> 
    @foreach($users as $user)
    <div class = "container">
        <div class =  "row ">
    <div class = "col-sm-3 ">

        <li class = "media">
            <img src="{{Gravatar::get($user->email,["size" => 50])}}" alt = ""></img>
            <div class = "media-body">
                <div>
                    {{$user -> name}}
                </div>
                
                
                    <p> {!! link_to_route("users.show","Profile",["user"=>$user->id]) !!}

                    </p>
                               
    
                </div>
    </li>
    </div>
    <div class = "col-sm-3">
        @include("user_follow.follow_button")
    </div>
</div>
        
    </div>
    

    @endforeach
    
    
    
</ul>

    {{ $users->links() }}


@endif