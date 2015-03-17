var num;

$(document).ready(function () {
    $(".jeux").on('mouseover', grossissement);
    $(".jeux").on('mouseleave', reduction);
    $(".jeux").children(".solo").hide();
    $(".jeux").children(".multi").hide();
    $(".jeux").click(option);
});

function grossissement() {
    $(this).children("img").css('width', '200px');
    $(this).children("img").css('height', '200px');
}

function reduction() {
    $(this).children("img").css('width', '170px');
    $(this).children("img").css('height', '170px');
    $(".jeux").children(".solo").hide();
    $(".jeux").children(".multi").hide();
}

function option() {
    $(this).children(".solo").slideToggle();
    $(this).children(".multi").slideToggle();
}

function recupId(id){
    num = id;
    //alert(num);
    setCookie('id',id);
    //alert(getCookie('id'));
}

function setCookie(sName, sValue) {
        var today = new Date(), expires = new Date();
        expires.setTime(today.getTime() + (365*24*60*60*1000));
        document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}

function getCookie(sName) {
    var cookContent = document.cookie, cookEnd, i, j;
    var sName = sName + "=";
    
    for (i=0, c=cookContent.length; i<c; i++) {
        j = i + sName.length;
        if (cookContent.substring(i, j) == sName) {
            cookEnd = cookContent.indexOf(";", j);
            if (cookEnd == -1) {
                cookEnd = cookContent.length;
            }
            return decodeURIComponent(cookContent.substring(j, cookEnd));
        }
    }       
       
    return "erreur";
}




