<?php session_start(); ?>
<?php
if(empty($_POST['pseudo']) && empty($_POST['pass']))
{
?>
<form method="post" action="index.php?page=1">
    <p>
       <label for="pseudo">Nom d'utilisateur </label>
       <input type="text" name="pseudo" id="pseudo" />
       <br/>
       <label for="pass">Mot de passe </label>
       <input type="password" name="pass" id="pass" />
        <br/>
        <input type="submit" value="Valider">
   </p>
</form>
<?php
}else{
    $pdo = new Mypdo();
	$utilisateurManager = new UtilisateurManager($pdo);
	$utilisateurs = $utilisateurManager->getAllUtilisateurs();
    //$salt = 'Q4Yx5o2DT7';
    
    $_SESSION['user'] = false;
    $login = $_POST["pseudo"];
    $password = $_POST["pass"] /*= crypt($_POST['password'],$salt)*/;

    foreach($utilisateurs as $utilisateur){
        if($utilisateur->getPseudo() == $login){
            if($utilisateur->getMdp() == $password){
                $_SESSION['user'] = $utilisateur;
                //echo "<p>Vous êtes bien connecté</p>";
            }
        }
    }
    if($_SESSION['user'] == false)
    {
        echo "Les informations saisies ne sont pas valides";
    }
}
?>