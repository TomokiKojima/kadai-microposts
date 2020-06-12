<div id="carousel-{{$micropost->id}}" class="carousel" data-ride="carousel" >
  
    <div class="carousel-inner"  >　 
    
            @foreach($images as  $index => $image)
            @if ($index == 0)
                 <div class="carousel-item active" >
            @else
                 <div class="carousel-item "  >
            @endif
            
                <img class="d-block center-block w-100"　 
                style = "height:auto; max-height:740px;width:80%; "
                src="{!! asset('storage/'.$image->image_path) !!}" 
                alt="この画像は表示できません"   >
            </div>　
            @endforeach
              <a class="carousel-control-prev " href="#carousel-{{$micropost->id}}" role="button" data-slide="prev" style = "width:10%; background:transparent;　opacity:1.0;">
      <span class="carousel-control-prev-icon" ></span>
      <span class="sr-only">Previous</span>
    </a>
    
    <a class="carousel-control-next " href="#carousel-{{$micropost->id}}" role="button" data-slide="next" style = "width:10%;background:transparent;opacity:0.8;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            
            
        
        
        
    </div>
    
  
    
</div>