<?php session_start(); ?>
<?php
if(empty($_POST['pseudo']) && empty($_POST['pass']))
{
?>
<form class="formConnexion" method="post" action="index.php?page=0" id="co">
    <table>
    <tr>
        <td>
        <label for="pseudo">Nom d'utilisateur </label>
        </td>
        <td>
        <input type="text" name="pseudo" id="pseudo" />
        </td>
    </tr>
    <tr>
        <td>
        <label for="pass">Mot de passe </label>
        </td>   
        <td>
        <input type="password" name="pass" id="pass" />
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Valider">
        </td>
    </tr>   
    </table>
</form>
<?php
}else{
    $pdo = new Mypdo();
	$utilisateurManager = new UtilisateurManager($pdo);
	$utilisateurs = $utilisateurManager->getAllUtilisateurs();
    //$salt = 'Q4Yx5o2DT7';
    
    $_SESSION['user'] = false;
    $_SESSION['pseudo'] = false;
    $login = $_POST["pseudo"];
    $password = $_POST["pass"] /*= crypt($_POST['password'],$salt)*/;

    foreach($utilisateurs as $utilisateur){
        if($utilisateur->getPseudo() == $login){
            if($utilisateur->getMdp() == $password){
                $_SESSION['user'] = $utilisateur;
                $_SESSION['pseudo'] = $utilisateur->getPseudo();
                    echo "<div class='co'>";
                    echo "<p>Vous êtes bien connecté</p>";
                    echo "<a href=index.php?page=1>Accéder au catalogue</a>";
                    echo "</div>";
            }
        }
    }
    if($_SESSION['user'] == false)
    {
        echo "Les informations saisies ne sont pas valides";
    }
}
?>