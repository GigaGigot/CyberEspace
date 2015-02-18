<?php
class UtilisateurManager{
    private $bd;
	
	public function __construct($db){
		$this->db = $db;
	}
    
    public function getAllUtilisateurs(){
		$listeUtilisateurs = array();
		$sql = 'select * from utilisateur';
		$requete = $this->db->prepare($sql);
		$requete->execute();
		
		while($personne = $requete->fetch(PDO::FETCH_ASSOC)){
			$listeUtilisateurs[] = new Utilisateur($utilisateur);
		}
		$requete->closeCursor();

		return $listeUtilisateurs;
	}
}
?>