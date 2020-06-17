    <li class = "media mb-3">
        <img src="{{Gravatar::get($micropost->user->email,["size" => 50 ])}}"></img>
        <div class = "media-body">
            <div>
                {!! link_to_route("users.show",$micropost->user->name,["user" => $micropost->user->id]) !!}
             
                <span class = "text-muted" >posted at
                
                <?php
                $posted_time =$micropost->created_at;
                 $diff = time() - strtotime($posted_time); ?>

                @if ( $diff< 60) 
                 {{ $diff}}秒前
                 @elseif ($diff < 3600) 
                 {{ intdiv($diff,60) }}分前
                 @elseif ($diff < 86400) 
                 {{ intdiv($diff,3600) }}時間前
                 @else
                 {{$posted_time}}
                @endif
                
                </span>
                
            

            </div>
            <div>
                <p class = "mb-0"> {!! nl2br(($micropost->content)) !!}</p>
             @include("microposts.micropost_images")
             
             
                
                <!--                 <p class = "mb-0">   <img src="{!! $micropost->image_path  !!} "></p> -->
            </div>
            <div class = "row mt-3">
                <div  class = "col-sm-2">
                    @include("micropost_fav.favorite_button")
                    
                </div>
                
                <div  class = "col-sm-2">
                    
                    @if (Auth::id() == $micropost->user_id)
                    
                        {!! Form::open(["route"=>["microposts.destroy",$micropost->id],"method" => "delete"]) !!}
                            {!! Form::submit("Delete",["class" => "btn-danger btn-sm" ]) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
            
        </div>

    
    </li>