$(document).ready(function() {
    $(".jeux").on('mouseover',grossissement);
    $(".jeux").on('mouseleave',reduction);
    
    $(".jeux").children(".solo").hide();
    $(".jeux").children(".multi").hide();
    
    $(".jeux").click(option);
});

function grossissement(){
     $(this).children("img").css('width','200px');
     $(this).children("img").css('height','200px');
}

function reduction(){
    $(this).children("img").css('width','170px');
    $(this).children("img").css('height','170px');
    $(".jeux").children(".solo").hide();
    $(".jeux").children(".multi").hide();
}

function option(){
    $(this).children(".solo").slideToggle();
    $(this).children(".multi").slideToggle();
}
