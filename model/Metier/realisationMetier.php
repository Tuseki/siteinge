<?php
/*
 * Ce fichier contient une classe poss�dant toutes les fonctions de traitement de donn�es 

 * concernant les r�alisations
 * 
 * Cette classe est utilis� par le controller et fait appel au DAO si besoin. 
 * Cette classe est un singleton
 */
 
 require ("./model/DAO/DAO.php");
 
 class RealisationMetier{
 	private $db;
 	private $realisationMetier;
 	
 	/*
 	 * Constructeur : 

 	 * 
 	 * Aucun param, se contente d'initialis� l'objet DAO.
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
 	
 	// Pr�vient les utilisateurs sur le cl�nage de l'instance
    public function __clone()
    {
        trigger_error('Le cl�nage n\'est pas autoris�.', E_USER_ERROR);
    }
 }
?>
