<?php   
    include 'classes/Voiture.php';
    
    $nbPlace = 5; 
    $maVoiture = new Voiture("Renault", "Clio", $nbPlace);
    echo $maVoiture->demarrer();
    echo $maVoiture->grandeOuPetite($nbPlace);
    
    $nbPlace = 2; 
    $maVoiture = new Voiture("Renault", "Master", $nbPlace);
    echo $maVoiture->demarrer();
    echo $maVoiture->grandeOuPetite($nbPlace);
