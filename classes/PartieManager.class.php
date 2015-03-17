<?php
class PartieManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
    public function add($partie){
        if(!isset($partie->getPartie_joueur3)){
            if(!isset($partie->getPartie_joueur4)){ // 4 joueurs
                $requete = $this->db->prepare('insert into partie(date, jeu, joueur1, joueur2, joueur3, joueur4) values (:date, :jeu, :joueur1, :joueur2, :joueur3, :joueur4);');
                $requete->bindValue(':date', $partie->getPartie_date());
                $requete->bindValue(':jeu',$partie->getPartie_jeu());
                $requete->bindValue(':joueur1',$partie->getPartie_joueur1());
                $requete->bindValue(':joueur2',$partie->getPartie_joueur2());
                $requete->bindValue(':joueur3',$partie->getPartie_joueur3());
                $requete->bindValue(':joueur4',$partie->getPartie_joueur4());
            }else{                      // 3 joueurs
                $requete = $this->db->prepare('insert into partie(date, jeu, joueur1, joueur2, joueur3) values (:date, :jeu, :joueur1, :joueur2, :joueur3);');
                $requete->bindValue(':date', $partie->getPartie_date());
                $requete->bindValue(':jeu',$partie->getPartie_jeu());
                $requete->bindValue(':joueur1',$partie->getPartie_joueur1());
                $requete->bindValue(':joueur2',$partie->getPartie_joueur2());
                $requete->bindValue(':joueur3',$partie->getPartie_joueur3());
            }
        }else{                          // 2 joueurs
            $requete = $this->db->prepare('insert into partie(date, jeu, joueur1, joueur2) values (:date, :jeu, :joueur1, :joueur2);');
                $requete->bindValue(':date', $partie->getPartie_date());
                $requete->bindValue(':jeu',$partie->getPartie_jeu());
                $requete->bindValue(':joueur1',$partie->getPartie_joueur1());
                $requete->bindValue(':joueur2',$partie->getPartie_joueur2());
        }
            
		
		$retour=$requete->execute();
		return $retour;
	}
    
    public function getAllParties(){
        $listePartie = array();
		$sql = 'SELECT * FROM partie';
		$req = $this->db->prepare($sql);
		$req->execute();
		
		while($part = $req->fetch(PDO::FETCH_OBJ)){
			$listePartie[] = new Partie($part);
		}
		$req->closeCursor();
		return $listePartie;
		
	}
}