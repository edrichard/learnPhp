<?php



require_once 'Models/recette.php';


if (isset($_GET['id']))
{
    $idRecette = $_GET['id'];
}
else
{
    $idRecette = 1;
}


$recette = getRecetteByIdRecette($idRecette);



//$ingredients = getIngredientByIdRecette($idRecette);
//$images = getImageByIdRecette($idRecette);

$title = "Recette : ".$recette['titre'];

require_once 'Views/recette.php';



?> 