@extends("layouts.app")

@section("content")
<div class = "text-center">
    <h1>Log in</h1>
</div>

<div class = "row">
    
    <div class = "col-sm-6 offset-sm-3">  
    
     @include("auth.login_form")
</div>
</div>
@endsection