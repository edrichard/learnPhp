<?php
require_once 'connexion.php';





function getAllIngredient()
{
    $connect = dbconnect();
    $ingredient_req = mysql_query("SELECT titre,image.nom as nomImage,idIngredient,ingredient.nom as nomIngredient FROM ingredient,image where idIngredient=ingredient_idingredient ORDER BY idIngredient");
    $ingredients=array();
    while ($row = mysql_fetch_assoc($ingredient_req))
    {
        $ingredients[]=$row;
    }
    //var_dump($ingredients);
    //dbclose($connect);
    return $ingredients;
}

function getRecetteByIdIngredient($id)
{
    $connect = dbconnect();
    $ingredient_req = mysql_query("SELECT titre,idRecette,idIngredient FROM ingredient,recette,quantite where idRecette=Recette_idRecette and Ingredient_idIngredient=idIngredient and idIngredient=".$id);
    $ingredients=array();
    while ($row = mysql_fetch_assoc($ingredient_req))
    {
        $ingredients[]=$row;
    }
    
    //dbclose($connect);
    return $ingredients;
}
