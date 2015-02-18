<div>
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
case 0:
	include_once('pages/connexion.inc.php');
	break;
case 1:
	include_once('pages/catalogue.inc.php');
	break;
case 2:
	include_once('pages/tournoi.inc.php');
	break;
case 3:
    include_once('pages/jeu.inc.php');
    break;

default : 	include_once('pages/accueil.inc.php');
}
?>
</div>
