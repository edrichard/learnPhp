

<?php

//test

require_once 'Models/ingredient.php';

$title = "Ingredient";


if (isset($_GET['id']))
{
    $idIngredient = $_GET['id'];
}
else
{
    $idIngredient = 1;
}


$recettes = getRecetteByIdIngredient($idIngredient);
$ingredients = getAllIngredient();


require_once 'Views/ingredient.php';



?> 
