
<header class = "mb-4 sticky-top text-center " >
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class = "container">

        <a class="navbar-brand " href="/" style = "center">Microposts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    
                @if(Auth::check())
                <li class = "nav-item"> {!! link_to_route("users.index","ユーザー一覧", [], ['class' => 'nav-link']) !!} </li>
                <li class = "nav-item dropdown">
                    
                    {{--トグルのメニューを展開するためのボタン--}}
                    <a href = "#" class = "nav-link dropdown-toggle" data-toggle ="dropdown" >{{Auth::user()->name}}</a> 
                    <ul class = "dropdown-menu dropdown-menu-right">
                        
                        <li class = "dropdown-item">{!! link_to_route("users.show","Profile",["user"=> Auth::id()]) !!}</li>
                        <li class = "dropdown-item">{!! link_to_route("users.favorites","Favorites",["id"=> Auth::id()]) !!}</li>
                        <li class = "dropdown-divider"></li>
                        <li class = "dropdown-item">{!! link_to_route("logout.get","LogOut") !!}</li>
                        
                        
                    </ul>
</div>
                    
                    
                    
                </li>

                
                @else    
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class = "nav-item mr-1">{!! link_to_route("signup.get","SignUp",[],["class" => "nav-link px-4 py-1","style" => "background:white;color:  #67c5ff; border-radius:15px;"]) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item ml-1" >{!! link_to_route("login","Login",[],["class" => "nav-link px-4 py-1","style" => "background:white;color:  #67c5ff; border-radius:15px;"]) !!}</li>
                
                @endif
                </ul>
            </div>
</div>
    </nav>
</header>