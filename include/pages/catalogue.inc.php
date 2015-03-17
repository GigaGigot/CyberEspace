<?php session_start(); ?>
<h1>Catalogue</h1>

<script type="text/javascript">
    function passerID(){
            $.ajax({
                url : "include/pages/passerID.php",
                type : "POST",
                data : "&id=" + num,
                success : function(data){
                   console.log(data);
                },
                error : function(xhr,exception,message){
                    alert('Erreur');
                }
            }); 
    }
</script>

<?php
$db = new Mypdo();
$jeuManager = new JeuManager($db);
$jeux = $jeuManager->getAllJeux();

$user = $_SESSION['user'];
echo "<p id=\"utilisateur\">Utilisateur: ".$user->getPseudo()."</br>Crédits: ".strval($user->getCredit())."</p>";

foreach($jeux as $jeu){
echo "<div class='jeux' onmouseover=recupId(".$jeu->getJeu_id().") onclick='passerID()' >";
        echo "<img class='jeu' alt='icone d'un jeux' src='image/jeu".$jeu->getJeu_id().".png'>";
        echo "<p>".$jeu->getJeu_intitule()."</p>";
    ?>
    <input class='solo' id='solo' type='sumbit' value='Solo' onclick="location.href='index.php?page=3'" onclick="passerID()" >
    <input class='multi' id='multi' type='sumbit' value='Multi' onclick="location.href='index.php?page=4'" onclick="passerID()" > 
</div>
<?php
}
?>




