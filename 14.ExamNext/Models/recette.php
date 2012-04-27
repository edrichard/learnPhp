<?php

require_once 'connexion.php';

function getRecetteByIdRecette($id)
{
    //$id = mysql_real_escape_string($id);
    $connect = dbconnect();
    
    $recettes_req = mysql_query('SELECT * FROM recette WHERE idRecette='.$id);
    
    $recettes = array();
    while ($row = mysql_fetch_assoc($recettes_req)){
        $recettes[] = $row;
    }

    return $recettes;
}

 function getImageByIdRecette($id)
{
    //$id = mysql_real_escape_string($id);
    $connect = dbconnect();
    
    $images_req = mysql_query('SELECT * FROM image WHERE Recette_idRecette='.$id);
    
    $images = array();
    while ($row = mysql_fetch_assoc($images_req))
    {
        $images[] = $row;
    }

    return $images;
}

 function getIngredientByIdRecette($id)
{
    $id = mysql_real_escape_string($id);
    
    $connect = dbconnect();
    $req = "SELECT nom,quantite,unite FROM unite,quantite,ingredient WHERE idIngredient=Ingredient_idIngredient and Unite_idUnite=idUnite and Recette_idRecette=1";

    $ingredients_req = mysql_query($req);
    
    $ingredients = array();
    while ($row = mysql_fetch_assoc($ingredients_req)){
        $ingredients[] = $row;
        
    }
    
    return $ingredients;
}
