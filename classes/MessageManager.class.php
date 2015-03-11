<?php
class MessageManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
    public function add($message){
		$requete = $this->db->prepare('insert into message(pseudo, message) values (:pseudo, :message);');
		$requete->bindValue(':pseudo', $message->getPseudo());
        $requete->bindValue(':message',$message->getMessage());
		
		$retour=$requete->execute();
		return $retour;
	}
    
    public function getAllMessages(){
        $listeMessage = array();
		$sql = 'SELECT * FROM message';
		$req = $this->db->prepare($sql);
		$req->execute();
		
		while($mess = $req->fetch(PDO::FETCH_OBJ)){
			$listeMessage[] = new Message($mess);
		}
		$req->closeCursor();
		return $listeMessage;
		
	}
}