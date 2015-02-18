<?php session_start(); ?>
<h1>Catalogue</h1>


<?php
$db = new Mypdo();
$jeuManager = new JeuManager($db);
$jeux = $jeuManager->getAllJeux();
//var_dump($_SESSION['user']->getPseudo());
$user = $_SESSION['user'];
echo "<p id=\"utilisateur\">Utilisateur: ".$user->getPseudo()." </p>";
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