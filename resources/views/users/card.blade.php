<div class = "card">
    <div class = "card-headed">
        <h3 class = "card-title">{{ $user->name }}</h3>
    </div>
    
    <div class = "card-body">
        <img class = "rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}"></img>
        
    </div>
</div>
@include("user_follow.follow_button")