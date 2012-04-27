<?php ob_start() ?>
<h1><?php echo $title ?></h1>   

<div class="recettenotice">
    <p>Durée de la préparation : <?php echo utf8_decode($recette[0]['dureePrepa'])?></p>
    <p>Durée de la Cuisson : <?php echo utf8_decode($recette[0]['dureeCuisson'])?></p>
    <p>Nombre de personne : <?php echo utf8_decode($recette[0]['nbPersonne'])?></p>
</div>

<ul class="recettenotice list">
    <?php foreach ($ingredients AS $ingredient) {?>
        <li><?php echo htmlentities($ingredient['nom']).' : '.$ingredient['quantite'].' '.htmlentities($ingredient['unite']) ?></li>
    <?php } ?>
</ul>

<div class="separator"></div>

<p class="description">Description : <?php echo utf8_decode(htmlentities($recette[0]['description'])) ?></p>

<?php foreach ($images AS $image) {?>
<a href="Images/<?php echo $image['nom']?>" rel="shadowbox[Vacation]">
    <img src="Images/<?php echo $image['nom']?>" class="cakethumbnail" height="150" />
</a>
<?php }  ?>
    
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>

            
            
      