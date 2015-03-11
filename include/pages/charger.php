<?php
    include('../../classes/Mypdo.class.php');
    include('../../classes/MessageManager.class.php');
    include('../../classes/Message.class.php');
    include('../config.inc.php');

    session_start();
    $db = new Mypdo();
    $messageManager = new MessageManager($db);

    $liste = $messageManager->getAllMessages();

    foreach($liste as $mess){
        echo "[".$mess->getPseudo()."] ".$mess->getMessage()."<br/>";
    }
?>