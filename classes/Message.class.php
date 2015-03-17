<?php
class Message{
	private $id;
	private $pseudo;
	private $message;
    private $salon;
	
	public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			$this->affecte($valeurs);
		}
	}
	
	public function affecte($donnees){
		foreach($donnees as $attribut => $valeur){
			switch($attribut){
				case 'id' : $this->setId($valeur); break;
				case 'pseudo' : $this->setPseudo($valeur); break;
				case 'message' : $this->setMessage($valeur); break;
                case 'salon' : $this->setSalon($valeur); break;
			}
		}
	}
	
	public function setId($valeur){
		$this->id = $valeur;
	}
	
	public function setPseudo($valeur){
		$this->pseudo = $valeur;
	}
    
	public function setMessage($valeur){
		$this->message = $valeur;
	}
	
    public function setSalon($salon){
        $this->salon = $salon;   
    }
    
	public function getId(){
		return $this->id;
	}
	
	public function getPseudo(){
		return $this->pseudo;
	}
    
	public function getMessage(){
		return $this->message;
	}
    
    public function getSalon(){
        return $this->salon;   
    }
}