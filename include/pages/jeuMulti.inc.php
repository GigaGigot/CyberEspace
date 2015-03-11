<h1>Le coin des gens qui aiment jouer ensemble</h1>

<div class="jeu"></div>
    <div class="chat">
        <div id="afficheMessage">
        </div>
        
        <hr/>
        <form>
            Votre message : <br/><textarea id="saisieMessage" name="saisieMessage"></textarea></br>
            <input id="btnTchat" value="Envoyer">
        </form>
    </div>
<div class="boutik"></div>

<script>
    $(document).ready(function(){
        
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
            }
                    charger();
                }, 100);
            
            
        }
        function ecrire(){
            //e.preventDefault();
 
                    var pseudo = encodeURIComponent( $('#pseudo').val());
                var message = encodeURIComponent( $('#message').val());

            if(pseudo != "" && message != ""){
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