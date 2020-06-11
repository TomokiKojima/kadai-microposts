@if( count($micropost -> micropost_images()->paginate(4)) > 0  )
{{ $images =  $micropost ->micropost_images()->paginate(4)}}

<div class = "row">
    @foreach( $images as  $index => $image)
        <div class="col-sm-6 posted-image ">
            <img src="{!! asset('storage/'.$image->image_path)  !!}"  
            class="img-thumbnail "   loading="lazy"  data-toggle="modal" data-target="#modal_{{$micropost->id}}" onclick = "$('#carousel-{{$micropost->id}}').carousel({{$index}});">
        </div>
    @endforeach
    @include("microposts.image_modal")
</div>
@endif


