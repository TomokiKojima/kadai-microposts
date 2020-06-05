  <ul class = "nav nav-tabs nav-justified mb-3">
            
            
            <li class = "nav-item" >
                <a href="{{route("users.show",["user"=>$user->id])}}" class = "nav-link {{Request::routeIs("users.show") ? "active":"" }} ">
                    Time Line
                    <span class="badge badge-secondary">{{ $user->microposts_count }}</span>

                </a>
            </li>
            <!--<li class = "nav-item">
            <!--</li>-->
            
            <li class = "nav-item" ><a href="{{route("users.followings",["id"=>$user->id])}}" class = "nav-link {{Request::routeIs("users.followings") ? "active":"" }} ">Following
                                <span class="badge badge-secondary">{{ $user->followings_count }}</span>
            </a></li>
            
            <li class = "nav-item" ><a href="{{route("users.followers",["id"=>$user->id])}}" class = "nav-link {{Request::routeIs("users.followers") ? "active":"" }} ">Follower
                                <span class="badge badge-secondary">{{ $user->followers_count }}</span>

            </a></li>
            
             <li class = "nav-item" ><a href="{{route("users.favorites",["id"=>$user->id])}}" class = "nav-link {{Request::routeIs("users.favorites") ? "active":"" }} ">favorites
                                <span class="badge badge-secondary">{{ $user->favorites_count }}</span>

            </a></li>
            
        </ul>