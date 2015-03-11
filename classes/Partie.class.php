<?php
class Partie{
	private $id;
    private $date;
	private $jeu;
	private $joueur1;
	private $joueur2;
	private $joueur3;
	private $joueur4;
	
	public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			$this->affecte($valeurs);
		}
	}
	
	public function affecte($donnees){
		foreach($donnees as $attribut => $valeur){
			switch($attribut){
				case 'id' : $this->setPartie_id($valeur); break;
				case 'jeu' : $this->setPartie_jeu($valeur); break;
				case 'date' : $this->setPartie_date($valeur); break;
				case 'joueur1' : $this->setPartie_joueur1($valeur); break;
				case 'joueur2' : $this->setPartie_joueur2($valeur); break;
                case 'joueur3' : $this->setPartie_joueur3($valeur); break;
                case 'joueur4' : $this->setPartie_joueur4($valeur); break;
			}
		}
	}
    
    public function setPartie_id($valeur){}
    public function setPartie_id($valeur){}
    public function setPartie_id($valeur){}
    public function setPartie_id($valeur){}
    public function setPartie_id($valeur){}
    public function setPartie_id($valeur){}
    public function setPartie_id($valeur){}
    
?>