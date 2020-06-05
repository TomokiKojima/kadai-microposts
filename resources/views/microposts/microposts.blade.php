


@if (count($microposts) > 0)

<ul class = "list-unstyled">
    
    @foreach($microposts  as $micropost)
        @include("microposts.micropost")
    @endforeach
</ul>
    {{ $microposts->links() }}


@endif