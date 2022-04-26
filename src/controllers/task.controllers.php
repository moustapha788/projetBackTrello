<?php

// !chargement du modèle car il en a besoin
// require_once( PATH_SRC.'models'.DIRECTORY_SEPARATOR.'task.models.php' );
/**
*!Traitement des Requetes POST
*/
if($_SERVER[ 'REQUEST_METHOD' ] == 'POST') 
{
    if(isset( $_POST[ 'action' ])) 
    {
        if ($_POST[ 'action' ] === 'sauvegarder.etat') 
        {

        }
    }
}
/**
*!Traitement des Requetes GET
*click sur un lien qui a été définie par le programmeur
*renseigner sur l'url
*redirection qui  charge une vue
*/
if($_SERVER['REQUEST_METHOD']=="GET")
{
    if(isset($_GET['action']))
    {
        if($_GET['action']=="lister.etat")
        {

        }
    }
}

function lister_etats()
{

}
function save_status()
{

}
