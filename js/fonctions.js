$(document).ready(function() {
<<<<<<< HEAD
charger();
                        $(".jeux").on('mouseover',grossissement);
                        $(".jeux").on('mouseout',reduction);
                        $(".jeux").on('click' ,option);
                    });
=======
    $(".jeux").on('mouseover',grossissement);
    $(".jeux").on('mouseleave',reduction);
    
    $(".jeux").children(".solo").hide();
    $(".jeux").children(".multi").hide();
    
    $(".jeux").click(option);
});
>>>>>>> 312897dc8c313110c2293bf2692953ce4f35aa58

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

/*$('#btnTchat').click(function(e){
    e.preventDefault();

    alert('coucou');
    
    var pseudo = encodeURIComponent( $('#pseudo').val());
    var message = encodeURIComponent( $('#message').val());

    if(pseudo != "" && message != ""){
        $.ajax({
            url : "../include/pages/charger.php",
            type : "POST",
            data : "&message=" + message,
            success : function(data){
                $('#afficheMessage').html(data);
            },
            error : function(xhr,exception,message){
                alert(message);
            }
        });
    }
});*/

function charger(){
    setTimeout( function(){
        $.ajax({
            url : "index.php?page=4",
            type : "GET",
            success : function(html){
                $('#messages').prepend(html);
            }
        });
        charger();
    }, 5000);
}
