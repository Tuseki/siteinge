<?php
/*
 * Ce fichier contient une classe contenant QUE des fonctions statique

 * ces fonctions ont pour but d'aider au d�buggage 
 *
 * Une constante d�finie dans le fichier conf.php servira � d�finir si on doit activer le debuggage ou pas
 * 
 */
 
 class Debugg{ 	 	
 	
 	/*
 	 * Cette fonction sert � afficher les donn�es contenues dans $dataTab
 	 * 
 	 * Param : 
 	 *    - $function_name : contient le nom de la fonction appelante
 	 *    - $message : message laiss� par la fonction appelante pour d�crire quel sont ces donn�es
 	 *    - $dataTab : contient un tableau de toute les donn�es � afficher. Peut �tre eux-m�me des tableaux, des objets o� de simple variable
 	 * 
 	 * Return : rien
 	 */ 
 	public static function echo_dumps($function_name, $message, $dataTab){
 		
 		//si le mode debugg est ON
 		if(MUST_DEBUGG){
 			//si les donn�es sont bien initialis�e
 			if(isset($function_name) && isset($message) && isset($dataTab) 
 			 	&& $function_name != null && $message != null && $dataTab != null)
 			{
	 			echo "<b>Fonction : ".$function_name."</b><br><br>";
		 		echo "message : ".$message."<br>";
		 		foreach($dataTab as $key =>$data){
			 		if(is_array($data) || is_object($data)) echo var_dump($data)."<br><br>";
			 		else echo $key." : ".$data."<br><br>";
		 		}
		 		echo "<br><br>";
 			}
 			else die ("Function echo_dumps error ! Param�tres manquant ou mal initalis�<br>"); 
 		}
 	} 
 	
 	
 }
 
?>
