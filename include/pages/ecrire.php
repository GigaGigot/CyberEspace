<?php
    include('../../classes/Mypdo.class.php');
    include('../../classes/MessageManager.class.php');
    include('../../classes/Message.class.php');
    include('../config.inc.php');

    session_start();
    $db = new Mypdo();
    $messageManager = new MessageManager($db);
    $user = $_SESSION['user'];

    $message = new Message();
    $message->setPseudo('Jack');

    $message->setmessage($_POST['message']);

    $liste = $messageManager->add($message);
?>