<?php ob_start() ?>
<h1><?php echo $title; ?></h1>

<p><?php echo $recette['titre']?></p>
<p><?php echo $recette['durrePrepa']?></p>
<p><?php echo $recette['DureeCuisson']?></p>
<p><?php echo $recette['nbPersonne']?></p>
<p><?php echo $recette['description']?></p>







<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>

            
            
      