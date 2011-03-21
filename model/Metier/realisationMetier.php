<?php
/*
 * Ce fichier contient une classe possèdant toutes les fonctions de traitement de données 

 * concernant les réalisations
 * 
 * Cette classe est utilisé par le controller et fait appel au DAO si besoin. 
 * Cette classe est un singleton
 */
 
 require ("./model/DAO/DAO.php");
 
 class RealisationMetier{
 	private $db;
 	private $realisationMetier;
 	
 	/*
 	 * Constructeur : 

 	 * 
 	 * Aucun param, se contente d'initialisé l'objet DAO.
 	 */
 	private function __construct(){
 		$this->db = DAO::getInstance();
 	}
 	public static function getInstance(){
 		if(!isset(self::$realisationMetier)){
 			self::$realisationMetier = new RealisationMetier(); 			
 		}
 		return self::$realisationMetier; 		
 	}
 	
 	// Prévient les utilisateurs sur le clônage de l'instance
    public function __clone()
    {
        trigger_error('Le clônage n\'est pas autorisé.', E_USER_ERROR);
    }
 }
?>
