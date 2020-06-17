 {!! Form::open(["route"=> "login.post"])!!}
    <div class = "form-group">
    {!! Form::label("email","Email")!!}
    {!! Form::email("email",old("email"),["class" => "form-control"])!!}
    </div>
    
    
    <div class = "form-group">
    {!! Form::label("password","Password")!!}
    {!! Form::password("password",["class" => "form-control"])!!}
    </div>
    {!! Form::submit("Login",["class" => "btn btn-primary btn-block mt-2"]) !!}
    {!! Form::close() !!}