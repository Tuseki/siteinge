<?php
/*
 * Ce fichier contient une classe contenant QUE des fonctions statique

 * ces fonctions ont pour but d'aider au débuggage 
 *
 * Une constante définie dans le fichier conf.php servira à définir si on doit activer le debuggage ou pas
 * 
 */
 
 class Debugg{ 	 	
 	
 	/*
 	 * Cette fonction sert à afficher les données contenues dans $dataTab
 	 * 
 	 * Param : 
 	 *    - $function_name : contient le nom de la fonction appelante
 	 *    - $message : message laissé par la fonction appelante pour décrire quel sont ces données
 	 *    - $dataTab : contient un tableau de toute les données à afficher. Peut être eux-même des tableaux, des objets où de simple variable
 	 * 
 	 * Return : rien
 	 */ 
 	public static function echo_dumps($function_name, $message, $dataTab){
 		
 		//si le mode debugg est ON
 		if(MUST_DEBUGG){
 			//si les données sont bien initialisée
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
 			else die ("Function echo_dumps error ! Paramètres manquant ou mal initalisé<br>"); 
 		}
 	} 
 	
 	
 }
 
?>
