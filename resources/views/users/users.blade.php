@if (count($users) > 0 )
<ul class = "list-unstyled"> 
    @foreach($users as $user)
    <li class = "media">
        <img src="{{Gravater::get($user->email,["size" => 50])}}" alt = ""></img>
        <div class = "media-body">
            <div>
                {{$user -> name}}
            </div>
            
            <div>
            >
                <p> {!! link_to_route("users.show","Profile",["user"=>$user->id]) !!}</p>
            </div>
            
            
        </div>
        
        
        
    </li>
    
    @endforeach
    
    
    
</ul>

    {{ $users->links() }}


@endif