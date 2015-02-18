var estClique = false;

$(document).ready(function() {
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
    $(this).append("<input class='multi' type='sumbit' value='Multi' onclick=\"location.href='index.php?page=3'\">")
}
