<?php
/*
 * Ce fichier contient une classe poss�dant toutes les fonctions ayant acc�s � la base de donn�e
 * Ces fonctions renvoient les donn�es sous un format pr�d�finit => un objet conteneur de donn�e. 
 * Ce conteneur est d�fini ailleurs, dans le package class
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
 	 * Aucun param, se contente d'initialis� la connexion.
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
        	die('Une erreur est survenue lors de la connection � la base de donn�e !');
		}		 		 		 		 	
 	} 
 	public static function getInstance(){
 		if(!isset(self::$dao)){
 			self::$dao = new DAO(); 			
 		}
 		return self::$dao; 		
 	}
 	
 	// Pr�vient les utilisateurs sur le cl�nage de l'instance
    public function __clone()
    {
        trigger_error('Le cl�nage n\'est pas autoris�.', E_USER_ERROR);
    }
 	
 }
 
?>
