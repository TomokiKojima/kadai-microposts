@extends("layouts.app")
@section("content")
    <div class = row>
        
        <aside class = "col-sm-4">
            @include("users.card")

        </aside>

        <div class = "col-sm-8">
            @include("users.navtabs")
            @if (count($microposts) > 0)

                @foreach($microposts as $micropost)
                    @include("microposts.micropost")
                @endforeach
            @endif
            
        </div>
    </div>
@endsection


        
            

            
        
