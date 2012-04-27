<?php ob_start() ?>
<h1><?php echo $title; ?></h1>

<center>
    <div class="row">
         <div class="span6">
             
            <h2>Liste des Ingredients</h2>
            <ul class="nav nav-pills nav-stacked">
                <?php foreach ($ingredients AS $ingredient) { ?>
                <li class="<?php if ($ingredient['idIngredient'] ==  $idIngredient) echo 'active' ?> tabText">
                    <a href="ingredient.php?id=<?php echo $ingredient['idIngredient']; ?>">
                        <?php echo htmlentities($ingredient['nomIngredient']); ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
             
         </div>
        
         <div class="span6">
             
            <h2>Ingredient : <?php echo $ingredients[$recettes[0]['idIngredient']-1]['nomIngredient']; ?></h2>
            <img src="Images/<?php echo $ingredients[$recettes[0]['idIngredient']-1]['nomImage']; ?>" height=200/>
            <ul>
                <?php foreach ($recettes AS $recette) { ?>
                <li>
                    <a href="recette.php?id=<?php echo htmlentities($recette['idRecette']); ?>">
                        <?php echo htmlentities($recette['titre']); ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
            
         </div>
    </div>
</center>






</br>




<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>



