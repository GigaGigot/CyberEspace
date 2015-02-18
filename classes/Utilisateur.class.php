<?php
class Utilisateur{
     private $id;
     private $pseudo;
     private $mdp;
     private $credit;
     
     public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			foreach($valeurs as $attribut => $valeur){
				switch($attribut){
					case 'idUtilisateur' : $this->setId($valeur);break;
					case 'pseudo' : $this->setPseudo($valeur);break;
					case 'mdp' : $this->setMdp($valeur);break;
					case 'credit' : $this->setCredit($valeur);break;
				}
			}
		}
	}
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }
    
    public function setMdp($mdp){
        $this->mdp = $mdp;
    }
    
    public function setCredit($credit){
        $this->credit = $credit;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getPseudo(){
        return $this->pseudo;
    }
    
    public function getMdp(){
        return $this->mdp;
    }
    
    public function getCredit(){
        return $this->credit;
    }
}
?>