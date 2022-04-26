<?php

/* 
! Recherche d'un utilisateur dans le fichier json(notre base de données) 
*/
function find_status():array{
    // travail de l'orm
    $statuts=json_to_array("etats");
    
    return $statuts;
}


