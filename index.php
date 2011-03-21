<?php
/*
 * Ce fichier est un controller. 
 *
 * Le controller reçoit des "commandes" de la VUE via des requêtes SET et GET
 * Le controller agit en conséquence en préparant des données en appelant la couche MODEL si besoin
 * Le controller prépare et affiche la VUE en y envoyant les données sorties de la couche MODEL si elle en a besoin
 *  
 * Ce controller-ci s'occupe d'afficher la page d'accueil
 * 
 */
 
 
 /** 
  * import des fichier
  */ 
  //conf et debugg
  require ("./conf/conf.php");
  require ("./model/debugg/debugg.php");
  //les formats de données
  require ("./model/class/realisation.php");
  //les metiers dont on va avoir besoin
  require ("./model/Metier/realisationMetier.php");
  //les templates dont on va avoir besoin
  require ("./view/templates/bodyPartTemplates.php");
    
  
 /**
  * initalisation des paramètres
  */
   
 /**
  * préparation des données
  */
     Debugg::echo_dumps("index","test",array("testdata"));
 /**
  * préparation de la vue
  */
     
 /**
  * affichage de la vue
  */
?>
