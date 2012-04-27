<?php ob_start() ?>

<h1><?php echo $title; ?></h1>

<?php foreach ($recettes AS $recette) {?>
<div class="recette">

    <div class="recetteTitre">
        <h3>
            <a href="recette.php?id=<?php echo $recette['idRecette'] ;?>">
                <?php echo htmlentities($recette['titre']) ;?>
            </a>
        </h3>
    </div>

    <div class="recettePhoto">
        <img src="Images/<?php echo $recette['nom'] ;?>" width="200" height="200" />
    </div>

    <div class="separator"></div>
    
</div>
<?php } ?>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>

