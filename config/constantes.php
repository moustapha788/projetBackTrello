<?php
/* 
================================
*****************************
! LES  CONSTANTES DE MON PROJET :
*****************************
l'uri ou les query params contiennent 2 informations qui nous permet de dire au routeur de  choisir une décision et au controller de choisir une acion à executer

le rôle du routeur est de choisir un controller
le rôle du controller est de choisir une action
================================
*/

/*
? Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER["SCRIPT_FILENAME"]));

/*
? Chemin sur dossier src qui contient les controllers et les models
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

/*
? Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");


