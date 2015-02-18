<h1>Catalogue</h1>


<?php
$db = new Mypdo();
$jeuManager = new JeuManager($db);
$jeux = $jeuManager->getAllJeux();

foreach($jeux as $jeu){
    ?>
<a class="jeux" href="">
    <?php
    echo "<img alt='icone d'un jeux' src='image/jeu".$jeu->getJeu_id().".png'>";
    echo "<p>".$jeu->getJeu_intitule()."</p>";
    ?>
</a>
<?php
}
?>


