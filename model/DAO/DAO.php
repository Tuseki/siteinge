<?php
/*
 * Ce fichier contient une classe possédant toutes les fonctions ayant accès à la base de donnée
 * Ces fonctions renvoient les données sous un format prédéfinit => un objet conteneur de donnée. 
 * Ce conteneur est défini ailleurs, dans le package class
 * 
 * note : Cette classe est un singleton 
 */
 class DAO{
 	private $db;
 	private static $dao;
 	
 	/**
 	 * Function de singleton
 	 */
 	
 	/*
 	 * Constructeur : 

 	 * 
 	 * Aucun param, se contente d'initialisé la connexion.
 	 */
 	private function __construct(){
 		try
		{			
        	$this->db = new PDO(DB_HOST,DB_USER,DB_PASSWORD);
        	$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        	$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
 
		catch(Exception $e)
		{			        	
        	die('Une erreur est survenue lors de la connection à la base de donnée !');
		}		 		 		 		 	
 	} 
 	public static function getInstance(){
 		if(!isset(self::$dao)){
 			self::$dao = new DAO(); 			
 		}
 		return self::$dao; 		
 	}
 	
 	// Prévient les utilisateurs sur le clônage de l'instance
    public function __clone()
    {
        trigger_error('Le clônage n\'est pas autorisé.', E_USER_ERROR);
    }
 	
 }
 
?>
