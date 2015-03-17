<?php
    session_start();
    
    include('../../classes/Mypdo.class.php');
    include('../../classes/MessageManager.class.php');
    include('../../classes/Message.class.php');
    include('../../classes/Utilisateur.class.php');
    include('../config.inc.php');

    $db = new Mypdo();
    $messageManager = new MessageManager($db);
    
    $user = $_SESSION['pseudo'];

    $message = new Message();
    $message->setPseudo($user);
    $message->setSalon($_SESSION['id']);

    $message->setMessage($_POST['message']);

    if ($message->getMessage() != ""){

        $liste = $messageManager->add($message);
    }
?>
