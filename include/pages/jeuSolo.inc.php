<?php session_start(); ?>
<h1>Jeu solo</h1>
<?php
	$db = new Mypdo();
	$jeuManager = new JeuManager($db);
	$jeux = $jeuManager->getJeuByID($_SESSION['id']);
	
	foreach($jeux as $jeu){
		echo "<div class='game'> <iframe src=".$jeu->getJeu_adresse()."></iframe></div>";
	}
?>

<div class="chat"></div>
<div class="boutik"></div>
