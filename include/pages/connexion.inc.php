<?php
if(empty($_POST['login']) && empty($_POST['password']) && empty($_POST['verif']))
{
?>
<form method="post" action="index.php?page=0">
    <p>
       <label for="pseudo">Nom d'utilisateur </label>
       <input type="text" name="pseudo" id="pseudo" />
       <br/>
       <label for="pass">Mot de passe </label>
       <input type="password" name="pass" id="pass" />
        <br/>
        <input type=submit value="Valider">
   </p>
</form>
<?php
    var_dump($_POST["pseudo"]);
    var_dump($_POST["pass"]);
}else{
    $pdo = new Mypdo();
	$utilisateurManager = new UtilisateurManager($pdo);
	$utilisateurs = $utilisateurManager->getAllUtilisateurs();
    var_dump($utilisateurs);
    //$salt = 'Q4Yx5o2DT7';
    
    $_SESSION['user'] = false;
    $login = $_POST["pseudo"];
    $password = $_POST["pass"]/* = crypt($_POST['password'],$salt)*/;
    $verif = $_POST["verif"];
    var_dump($login);
    var_dump($password);
    if($verif == 5){
        foreach($utilisateurs as $utilisateur){
            if($utilisateur->getPseudo() == $login){
                if($utilisateur->getMdp() == $password){
                    $_SESSION['user'] = $utilisateur;
                    echo "Vous êtes bien connecté ";
                }
            }
        }
        if($_SESSION['user'] == false)
        {
            echo "Les informations saisies ne sont pas valides";
        }
    }else{
        echo "Vous avez échoué lors de la vérification";   
    }
}
?>