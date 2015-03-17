<?php
class MessageManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
    public function add($message){
		$requete = $this->db->prepare('insert into message(pseudo, message, salon) values (:pseudo, :message, :salon);');
		$requete->bindValue(':pseudo', $message->getPseudo());
        $requete->bindValue(':message',$message->getMessage());
        $requete->bindValue(':salon',$message->getSalon());
		
		$retour=$requete->execute();
		return $retour;
	}
    
<<<<<<< HEAD
    public function getAllMessages($id){
        $listeMessage = array();
		$sql = 'SELECT * FROM message WHERE salon = '.$id;
=======
    public function getAllMessages($salon){
        $listeMessage = array();
		$sql = 'SELECT * FROM message WHERE salon = '.$salon;
>>>>>>> origin/master
		$req = $this->db->prepare($sql);
		$req->execute();
		
		while($mess = $req->fetch(PDO::FETCH_OBJ)){
			$listeMessage[] = new Message($mess);
		}
		$req->closeCursor();
		return $listeMessage;
		
	}
}
