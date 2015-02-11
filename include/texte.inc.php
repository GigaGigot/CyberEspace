<div>
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {

case 1:
	include_once('pages/catalogue.inc.php');
	break;

default : 	include_once('pages/accueil.inc.php');
}
?>
</div>
