<?php session_start(); ?>
<h1>Catalogue</h1>


<?php
$db = new Mypdo();
$jeuManager = new JeuManager($db);
$jeux = $jeuManager->getAllJeux();

$user = $_SESSION['user'];
echo "<p id=\"utilisateur\">Utilisateur: ".$user->getPseudo()."</br>Crédits: ".strval($user->getCredit())."</p>";

foreach($jeux as $jeu){
    ?>
<div class="jeux">
    <?php
        echo "<img class='jeux' alt='icone d'un jeux' src='image/jeu".$jeu->getJeu_id().".png'>";
        echo "<p>".$jeu->getJeu_intitule()."</p>";
    ?>
</div>
<?php
}
?>