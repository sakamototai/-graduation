$(function(){
    $("#online_consultation").mouseover(function(e){
        $("ul",this).stop().slideDown('fast');
    })
    .mouseout(function(){
        $("ul",this).stop().slideUp('fast');
    })
})