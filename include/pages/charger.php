<?php
    include('../../classes/Mypdo.class.php');
    include('../../classes/MessageManager.class.php');
    include('../../classes/Message.class.php');
    include('../config.inc.php');

    session_start();
    $db = new Mypdo();
    $messageManager = new MessageManager($db);
    $id = $_SESSION['id'];

<<<<<<< HEAD
    $liste = $messageManager->getAllMessages($id);
=======
    $salon = $_SESSION['id'];

    $liste = $messageManager->getAllMessages($salon);
>>>>>>> origin/master

    foreach($liste as $mess){
        echo "[".$mess->getPseudo()."] ".$mess->getMessage()."<br/>";
    }
?>
