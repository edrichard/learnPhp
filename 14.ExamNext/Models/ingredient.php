<?php
require_once 'connexion.php';

function getAllIngredient()
{
    $connect = dbconnect();
    
    $ingredient_req = mysql_query("SELECT titre,image.nom as nomImage,idIngredient,ingredient.nom as nomIngredient FROM ingredient,image where idIngredient=ingredient_idingredient ORDER BY idIngredient ");
    
    $ingredients = array();
    while ($row = mysql_fetch_assoc($ingredient_req)){
        $ingredients[] = $row;
    }
    
    return $ingredients;
}

function getAllIngredienttri()
{
    $connect = dbconnect();
    
    $ingredient_req = mysql_query("SELECT titre,image.nom as nomImage,idIngredient,ingredient.nom as nomIngredient FROM ingredient,image where idIngredient=ingredient_idingredient ORDER BY ingredient.nom ");
    
    $ingredientstri = array();
    while ($row = mysql_fetch_assoc($ingredient_req)){
        $ingredientstri[] = $row;
    }
    
    return $ingredientstri;
}

function getRecetteByIdIngredient($id)
{
    $connect = dbconnect();
    
    $ingredient_req = mysql_query("SELECT titre,idRecette,idIngredient FROM ingredient,recette,quantite where idRecette=Recette_idRecette and Ingredient_idIngredient=idIngredient and idIngredient=".$id);
    
    $ingredients = array();
    while ($row = mysql_fetch_assoc($ingredient_req)){
        $ingredients[] = $row;
    }
    
    return $ingredients;
}
