@if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(["route"=>["favorites.unfavorite",$micropost->id],"method" => "delete"]) !!}
        {!! Form::submit("unFavorite",["class"=>"btn btn-secondary btn-sm"]) !!}
    {!! Form::close()!!}


@else
    {!! Form::open(["route"=>["favorites.favorite",$micropost->id],"method" => "post"]) !!}
        {!! Form::submit("Favorite",["class"=>"btn btn-success btn-sm"]) !!}
    {!! Form::close()!!}



@endif

