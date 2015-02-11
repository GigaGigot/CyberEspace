<h1>Catalogue</h1>


<?php
$db = new MyPdo();
$jeuManager = new JeuManager($db);
$jeux = $jeuManager->getAllJeux();

foreach($jeux as $jeu){
    echo $jeu->getJeu_intitule();
}
?>
<img class="jeux" alt="icone d'un jeux" src="image/jeu1.jpg" onclick="grossissement()">

