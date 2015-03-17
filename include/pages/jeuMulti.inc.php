<h1>Le coin des gens qui aiment jouer ensemble</h1>

<?php
	$db = new Mypdo();
	$jeuManager = new JeuManager($db);
	$jeux = $jeuManager->getJeuByID($_SESSION['id']);
	
	foreach($jeux as $jeu){
		echo "<div class='game'> <iframe src=".$jeu->getJeu_adresse()."></iframe></div>";
	}
?>
<div class="chat">
    <div id="afficheMessage" style="overflow: auto; max-height: 100px">
    </div>

    <hr/>
    <form class="formChat" id="form" action="javascript:void(0);">
        Votre message : <br/><textarea id="saisieMessage" name="saisieMessage"></textarea></br>
        <input type="button" id="btnTchat" value="Envoyer">
    </form>
</div>
<div class="boutik"></div>

<script>
    $(document).ready(function(){
        $('#saisieMessage').on('keyup', function(e) {
             if (e.which === 13) {
                 e.preventDefault();
                 $('#btnTchat').trigger('click');
             }
        });
        
        function charger(){
            //e.preventDefault();
            
            setTimeout(
                function() 
                {
                    //do something special
                    var pseudo = encodeURIComponent( $('#pseudo').val());
                    var message = encodeURIComponent( $('#message').val());

            if(pseudo != "" && message != ""){
                $.ajax({
                    url : "include/pages/charger.php",
                    type : "POST",
                    data : "&message=" + message,
                    success : function(data){
                        $('#afficheMessage').html(data);
                    },
                    error : function(xhr,exception,message){
                        alert(message);
                    }
                });
                $("#afficheMessage").scrollTop($("#afficheMessage")[0].scrollHeight);
            }
                    charger();
                }, 100);
            
            
        }
        function ecrire(){
            //e.preventDefault();
 
                var pseudo = encodeURIComponent( $('#pseudo').val());
                var message = encodeURIComponent( $('#saisieMessage').val());

            if(pseudo != "" && message != "" && message != "%0A"){
                $.ajax({
                    url : "include/pages/ecrire.php",
                    type : "POST",
                    data : "&message=" + $('#saisieMessage').val(),
                    success : function(data){
                        $('#afficheMessage').html(data);
                    },
                    error : function(xhr,exception,message){
                        alert(message);
                    }
                });
            }
            $('#saisieMessage').val("");
        }
        
        $('#btnTchat').click(function(e){
            ecrire();
        });
        
        $('#btnTchat').click();
        charger();

  });
</script>