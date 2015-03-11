<?php session_start(); ?>
<h1>Le coin des sans-amis</h1>
<?php
	$db = new Mypdo();
	$jeuManager = new JeuManager($db);
	$jeux = $jeuManager->getJeuByID($_SESSION['id']);
	
	foreach($jeux as $jeu){
		echo $jeu->getJeu_
		echo "<div class='jeu'> <iframe src=".$jeu->getJeu_adresse()."></iframe></div>";
	}
?>
<div class="chat"></div>
<div class="boutik"></div>
