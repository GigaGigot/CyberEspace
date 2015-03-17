<?php
class PartieManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
    public function add($partie){
		$requete = $this->db->prepare('insert into partie(date, jeu, joueur1, joueur2, joueur3, joueur4) values (:date, :jeu, :joueur1, :joueur2, :joueur3, :joueur4);');
		$requete->bindValue(':date', $partie->getPartie_date());
        $requete->bindValue(':jeu',$partie->getPartie_jeu());
        $requete->bindValue(':joueur1',$partie->getPartie_joueur1());
        $requete->bindValue(':joueur2',$partie->getPartie_joueur2());
        $requete->bindValue(':joueur3',$partie->getPartie_joueur3());
        $requete->bindValue(':joueur4',$partie->getPartie_joueur4());
		
		$retour=$requete->execute();
		return $retour;
	}
    
    public function getAllMessages(){
        $listeMessage = array();
		$sql = 'SELECT * FROM message WHERE salon = 1';
		$req = $this->db->prepare($sql);
		$req->execute();
		
		while($mess = $req->fetch(PDO::FETCH_OBJ)){
			$listeMessage[] = new Message($mess);
		}
		$req->closeCursor();
		return $listeMessage;
		
	}
}