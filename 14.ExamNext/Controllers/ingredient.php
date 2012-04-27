
<?php

require_once 'Models/ingredient.php';

$title = "Ingredients";

if (isset($_GET['id'])){
    $idIngredient = $_GET['id'];
} else {
    $idIngredient = 1;
}

$recettes = getRecetteByIdIngredient($idIngredient);
$ingredients = getAllIngredient();

require_once 'Views/ingredient.php';
