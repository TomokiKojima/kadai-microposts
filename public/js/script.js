function unfollow_button_hover(item){
    // item.classList.add("unfollow-button_hover");
    
    item.setAttribute('value',"フォローを外す");


}

function unfollow_button_not_hover(item){
    // item.classList.remove("unfollow-button_hover");
    // item.setAttribute('style',"color:white;background-color:green;");
    item.value = "フォロー中";


}