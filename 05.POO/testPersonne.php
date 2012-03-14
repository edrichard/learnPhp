<?php
    include 'classes/Personne.php';
    
    $john = new Personne();
    echo $john->getPrenom().'<br/>';
    
    $romain = new Personne();
    $romain->setPrenon("Romain");
    $romain->direBonjour();
