var estClique = false;

$(document).ready(function() {
charger();
                        $(".jeux").on('mouseover',grossissement);
                        $(".jeux").on('mouseout',reduction);
                        $(".jeux").on('click' ,option);
                    });

function grossissement(){
     $(this).css('width','200px');
     $(this).css('height','200px');

}

function reduction(){
    if(estClique == false){
        $(this).css('width','150px');
        $(this).css('height','150px');
    }
}

function option(){
    estClique = true;
    $(this).append("<input class='solo' type='sumbit' value='Solo' onclick=\"location.href='index.php?page=3'\">");
    $(this).append("<input class='multi' type='sumbit' value='Multi' onclick=\"location.href='index.php?page=4'\">")
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