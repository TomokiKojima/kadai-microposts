@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
    
        
        {!! Form::open(["route"=>["user.unfollow",$user->id],"method" => "delete"]) !!}
            {!! Form::submit("フォロー中",
            ["id" =>  "unfollow_user_".$user->id ,
            "class"=>"btn btn-success btn-block btn-unfollow",
            "onmouseover" =>"unfollow_button_hover(this);",
            "onmouseout" =>"unfollow_button_not_hover(this);"

            ]) !!}
        {!! Form::close()!!}
    @else
        {!! Form::open(["route"=>["user.follow",$user->id],"method" => "post"]) !!}
                    {!! Form::submit("フォローする",["class"=>"btn btn-outline-primary btn-block"]) !!}
        {!! Form::close()!!}
    @endif
@endif