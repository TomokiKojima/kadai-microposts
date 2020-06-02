@extends("layouts.app")

@section("content")
<div class = "row">
    <aside class = "col-sm-4">
        <div class = "card">
            <div class = "card-header">
                <h3 class = "card-title">{{$user ->name}} </h3>
                
            </div>
            <div class = "card-body">
                <img class = "rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt=""></img>
                
            </div>
        </div>
        
        
        
    </aside>
    
    <div class = "col-sm-8">
        <ul class = "nav nav-tabs nav-justified mb-3">
            
            
            <li class = "nav-item" >
                <a href="{{route("users.show",["user"=>$user->id])}}" class = "nav-link {{Request::routeIs("users.show") ? "active":"" }} ">
                    Time Line
                    <span class="badge badge-secondary">{{ $user->microposts_count }}</span>

                </a>
            </li>
            <li class = "nav-item" ><a href="#" class = "nav-link">Following</a></li>
            <li class = "nav-item" ><a href="#" class = "nav-link">Follower</a></li>
            
        </ul>
        
        @if (Auth::id() == $user->id)
        @include("microposts.form")
        @endif
        @include("microposts.microposts")
        
    </div>
    
    
    
    
    
    
</div>
@endsection
