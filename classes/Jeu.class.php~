<?php
class Jeu{
	private $id;
	private $intitule;
	private $solo;
	private $multi;
    private $adresse;
    private $cout;
	
	public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			$this->affecte($valeurs);
		}
	}
	
	public function affecte($donnees){
		foreach($donnees as $attribut => $valeur){
			switch($attribut){
				case 'id' : $this->setJeu_id($valeur); break;
				case 'intitule' : $this->setJeu_intitule($valeur); break;
				case 'solo' : $this->setJeu_solo($valeur); break;
				case 'multi' : $this->setJeu_multi($valeur); break;
                case 'aresse' : $this->setJeu_adresse($valeur); break;
                case 'cout' : $this->setJeu_cout($valeur); break;
			}
		}
	}
	
	public function setJeu_id($valeur){
		$this->id = $valeur;
	}
	
	public function setJeu_intitule($valeur){
		$this->intitule = $valeur;
	}
    
	public function setJeu_solo($valeur){
		$this->solo = $valeur;
	}
    
	public function setJeu_multi($valeur){
		$this->multi = $valeur;
	}
    
    public function setJeu_adresse($valeur){
		$this->adresse = $valeur;
	}
    
    public function setJeu_cout($valeur){
		$this->cout = $valeur;
	}
	
	public function getJeu_id(){
		return $this->id;
	}
	
	public function getJeu_intitule(){
		return $this->intitule;
	}
    
	public function getJeu_solo(){
		return $this->solo;
	}
    
	public function getJeu_multi(){
		return $this->multi;
	}
    
    public function getJeu_adresse(){
		return $this->adresse;
	}
    
    public function getJeu_cout(){
		return $this->cout;
	}
}