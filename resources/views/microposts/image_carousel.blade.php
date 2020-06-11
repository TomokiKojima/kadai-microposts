<div id="carousel-{{$micropost->id}}" class="carousel slide" data-ride="carousel">
  
    <div class="carousel-inner"  style = "background:gray;" >　 
    
        <div>
        @foreach($images as  $index => $image)
        @if ($index == 0)
             <div class="carousel-item active col-sm-10" style="width:80%;height: 80%;">
        @else
             <div class="carousel-item"  style="width:80%;height: 80%;">
        @endif
        
            <img class="d-block w-100　data-interval="100" 
            src="{!! asset('storage/'.$image->image_path) !!}" 
            alt="この画像は表示できません"   >
        </div>　
        @endforeach
        </div>
          <a class="carousel-control-prev " href="#carousel-{{$micropost->id}}" role="button" data-slide="prev" style = "background:gray;">
      <span class="carousel-control-prev-icon" ></span>
      <span class="sr-only">Previous</span>
    </a>
    
    <a class="carousel-control-next " href="#carousel-{{$micropost->id}}" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
        
    </div>
    
  
    
</div>