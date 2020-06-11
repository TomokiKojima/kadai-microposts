{!! Form::open(["route" => "microposts.store", 'files' => true]) !!}

<div class = "form-group">
    {!! Form::textarea("content",old("content"),['class' => 'form-control', 'rows' => '2']) !!}
    
    {!! Form::file('images[]',[ 'multiple'=>true,'class'=>'send-btn',"enctype"=>"multipart/form-data","accept" => "image/*"]) !!}

    {!! Form::submit("投稿する",["class" => "btn btn-primary btn-block"]) !!}
    
</div>


{!! Form::close()  !!}