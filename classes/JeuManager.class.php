<?php
class JeuManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
	public function getAllJeux(){
		$listeJeux = array();
		$sql = 'SELECT intitulé, solo, multi FROM jeu';
		$req = $this->db->prepare($sql);
		$req->execute();
		
		while($jeu = $req->fetch(PDO::FETCH_OBJ)){
			$listeJeux[] = new Jeu($jeu);
		}
		$req->closeCursor();
		
		return $listeJeux;
		
	}
	
	public function getJeuByID($id){
		$req = $this->db->prepare('SELECT * FROM jeu WHERE id = :id');
		$req->bindValue(':id', $id);
		$nom = $req->execute();
		
		while($jeu = $req->fetch(PDO::FETCH_OBJ)){
			$jeuRecherche = new Jeu($jeu);
		}
		$req->closeCursor();
			
		return $jeuRecherche;
	}
	
}