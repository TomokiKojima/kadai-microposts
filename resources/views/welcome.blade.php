@extends("layouts.app")


@section("content")

@if (Auth::check())
  
  <div class = "row">
      <aside class="col-sm-2">
          <!--@include("users.card")-->
          
      </aside>
      
  <div class = "col-sm-8　">    
    @include("microposts.form")
    @include("microposts.microposts")
    </div>
</div>
@else
<div class = "center jumbtron">
    <div class = "text-center">
      
      
        <h1>Welcome to the Microposts </h1>
        
<div class = "row">
    
    <div class = "col-sm-6 offset-sm-3">  
    
   @include("auth.login_form")
        <h2 class = "my-5" >Or</h2>
      
        {!! link_to_route("signup.get","SighUp",[],["class" => "btn btn-lg btn-primary btn-block"] )!!}
    </div>
    
</div>
@endif

@endsection