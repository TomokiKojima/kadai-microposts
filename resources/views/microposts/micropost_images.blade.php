@if( count($micropost -> micropost_images()->paginate(4)) > 0  )
    @foreach($micropost ->micropost_images()->paginate(4) as $image)
        <img src="{!! asset('storage/'.$image->image_path)  !!}" style = "border:solid;"></img>
    @endforeach
@endif