<?php
class Jeu{
	private $id;
	private $intitulé;
	private $solo;
	private $multi;
	
	public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			$this->affecte($valeurs);
		}
	}
	
	public function affecte($donnees){
		foreach($donnees as $attribut => $valeur){
			switch($attribut){
				case 'id' : $this->setJeu_id($valeur); break;
				case 'intitulé' : $this->setJeu_intitulé($valeur); break;
				case 'solo' : $this->setJeu_solo($valeur); break;
				case 'multi' : $this->setJeu_multi($valeur); break;
			}
		}
	}
	
	public function setJeu_id($valeur){
		$this->id = $valeur;
	}
	
	public function setJeu_intitulé($valeur){
		$this->intitulé = $valeur;
	}
    
	public function setJeu_solo($valeur){
		$this->solo = $valeur;
	}
    
	public function setJeu_multi($valeur){
		$this->multi = $valeur;
	}
	
	public function getJeu_id(){
		return $this->id;
	}
	
	public function getJeu_intitulé(){
		return $this->intitulé;
	}
    
	public function getJeu_solo(){
		return $this->solo;
	}
    
	public function getJeu_multi(){
		return $this->multi;
	}
}