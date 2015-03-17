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
		
		while($utilisateur = $requete->fetch(PDO::FETCH_ASSOC)){
			$listeUtilisateurs[] = new Utilisateur($utilisateur);
		}
		$requete->closeCursor();

		return $listeUtilisateurs;
	}
    
    public function updateCreditUtilisateur($utilisateur){
		$requete = $this->db->prepare('update utilisateur set credit=:credit where idUtilisateur=:id');
		$requete->bindValue(':credit', $utilisateur->getCredit());
        $requete->bindValue(':id', $utilisateur->getId());
		
		$retour=$requete->execute();
	}
}
?>