<?php
/*
 * Ce fichier est un controller. 
 *
 * Le controller re�oit des "commandes" de la VUE via des requ�tes SET et GET
 * Le controller agit en cons�quence en pr�parant des donn�es en appelant la couche MODEL si besoin
 * Le controller pr�pare et affiche la VUE en y envoyant les donn�es sorties de la couche MODEL si elle en a besoin
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
  //les formats de donn�es
  require ("./model/class/realisation.php");
  //les metiers dont on va avoir besoin
  require ("./model/Metier/realisationMetier.php");
  //les templates dont on va avoir besoin
  require ("./view/templates/bodyPartTemplates.php");
    
  
 /**
  * initalisation des param�tres
  */
   
 /**
  * pr�paration des donn�es
  */
     Debugg::echo_dumps("index","test",array("testdata"));
 /**
  * pr�paration de la vue
  */
     
 /**
  * affichage de la vue
  */
?>
