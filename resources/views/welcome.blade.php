@extends("layouts.app")


@section("content")

@if (Auth::check())
    ようこそ {{Auth::user()->name}} さん!
    

@else
<div class = "center jumbtron">
    <div class = "text-center">
        <h1>Welcome to the Microposts </h1>
        {!! link_to_route("signup.get","Sigh Up Now !!",[],["class" => "btn btn-lg btn-primary"] )!!}
    </div>
    
</div>
@endif

@endsection