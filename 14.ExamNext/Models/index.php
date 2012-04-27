<?php
require_once 'connexion.php';

function triTblRecettes($tbl = array())
{
    $idRecette = -1;
    $newTbl = array();
    
    foreach ($tbl as $element){
        if ($idRecette!=$element['idRecette']){
          $newTbl[]=$element;
          $idRecette = $element['idRecette'];
        }
    }
    
    return $newTbl;
}



function getAllRecettes()
{
    $connect = dbconnect();
    
    $recettes_req = mysql_query("SELECT * FROM recette, image WHERE recette.idRecette = image.Recette_idRecette");
    
    $recettes = array();
    while ($row = mysql_fetch_assoc($recettes_req)){
        $recettes[] = $row;
    }
    
    dbclose($connect);
    return triTblRecettes($recettes);
}


