<?php ob_start() ?>
<h1><?php echo $title; ?></h1>
<?php foreach ($recettes AS $recette) {?>
<h3><a href="recette.php?id=<?php echo $recette['idRecette'] ;?>"><?php echo htmlentities($recette['titre']) ;?></a></h3>
            <img src="Images/<?php echo $recette['nom'] ;?>" />
            
 <?php } ?>


<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>

