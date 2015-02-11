$(document).ready(function() {
                        $(".jeux").on('mouseover',grossissement);
$(".jeux").on('mouseout',reduction);
                    });

function grossissement(){
    $(this).css('width','200px');
    $(this).css('height','200px');
}

function reduction(){
    $(this).css('width','150px');
    $(this).css('height','150px');
}