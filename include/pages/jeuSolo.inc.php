<?php session_start(); ?>
<h1>Jeu solo</h1>
<?php
    
	$db = new Mypdo();
	$jeuManager = new JeuManager($db);
	$jeux = $jeuManager->getJeuByID($_SESSION['id']);

	$utilisateurManager = new UtilisateurManager($db);
    $user = $_SESSION['user'];
    $user->setCredit($user->getCredit()-1);
    $utilisateurManager->updateCreditUtilisateur($user);
	
	foreach($jeux as $jeu){
		echo "<div class='game'> <iframe src=".$jeu->getJeu_adresse()."></iframe></div>";
	}
?>

<div class="boutik"><iframe></iframe></div>
