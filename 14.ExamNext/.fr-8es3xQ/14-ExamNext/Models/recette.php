<?php

require_once 'connexion.php';

function getRecetteByIdRecette($id)
{
    error_log('ok');
    $id = mysql_real_escape_string($id);
    $connect = dbconnect();
    $recette_req = mysql_query("SELECT * FROM recette idRecette=".$id,$connect)or error_log(mysql_error());
    dbclose($connect);
    return $recette_req;
}
// function getImageByIdRecette($id)
//{
//    $id = mysql_real_escape_string($id);
//    
//    $connect = dbconnect();
//    $images_req = mysql_query("SELECT * FROM image WHERE Recette_idRecette =".$id);
//    $images=array();
//    while ($row = mysql_fetch_assoc($images_req))
//    {
//        $images[]=$row;
//    }
//    dbclose($connect);
//    return $images;
//}
// function getIngredientByIdRecette($id)
//{
//    $id = mysql_real_escape_string($id);
//    
//    $connect = dbconnect();
//    //$req = "SELECT nom,quantite,unite FROM unite,quantite,ingredient WHERE idIngredient=Ingredient_idIngredient and Unite_idUnite=idUnite and Recette_idRecette=1";
//    $req = "SELECT * FROM unite,quantite,ingredient";
//    $ingredients_req = mysql_query($req);
//    var_dump($ingredients_req);
//    
//    $ingredients=array();
//    while ($row = mysql_fetch_object($ingredients_req))
//    {
//        $ingredients[]=$row->nom;
//        $ingredients[]=$row->unite;
//        $ingredients[]=$row->quantite;
//        
//    }
//    dbclose($connect);
//    var_dump($ingredients);
//    return $ingredients;
//     
//  
//}
 
 
?>
