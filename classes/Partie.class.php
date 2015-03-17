<?php
class Partie
{
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
	
	public function affecte($donnees)
    {
		foreach($donnees as $attribut => $valeur)
        {
			switch($attribut)
            {
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
    
    public function setPartie_id($valeur){
        $this->id = $valeur;
    }
    public function setPartie_jeu($valeur){
        $this->jeu = $valeur;
    }
    public function setPartie_date($valeur){
        $this->date = $valeur;
    }
    public function setPartie_joueur1($valeur){
        $this->joueur1 = $valeur;
    }
    public function setPartie_joueur2($valeur){
        $this->joueur2 = $valeur;
    }
    public function setPartie_joueur3($valeur){
        $this->joueur3 = $valeur;
    }
    public function setPartie_joueur4($valeur){
        $this->joueur4 = $valeur;
    }
    
    public function getPartie_id(){
        return $this->id;
    }
    public function getPartie_jeu(){
        return $this->jeu;
    }
    public function getPartie_date(){
        return $this->date;
    }
    public function getPartie_joueur1(){
        return $this->joueur1;
    }
    public function getPartie_joueur2(){
        return $this->joueur2;
    }
    public function getPartie_joueur3(){
        return $this->joueur3;
    }
    public function getPartie_joueur4(){
        return $this->joueur4;
    }
}
    
?>