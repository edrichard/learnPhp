<?php   
    include 'classes/Voiture.php';
    
    $nbPlace = 5; 
    $maVoiture1 = new Voiture("Renault", "Clio", $nbPlace);
    echo $maVoiture1->demarrer();
    echo $maVoiture1->grandeOuPetite($nbPlace);
        echo '<hr/>';
    $nbPlace = 2; 
    $maVoiture2 = new Voiture("Renault", "Master", $nbPlace);
    echo $maVoiture2->demarrer();
    echo $maVoiture2->grandeOuPetite($nbPlace);
        echo '<hr/>';
    $nbPlace = 5; 
    $puissance = 1000;
    $maVoiture3 = new Voiture("Chevrolet", "Cruze", $nbPlace);
    echo $maVoiture3->demarrer();
    echo $maVoiture3->grandeOuPetite($nbPlace);
    echo $maVoiture3->setPuissance($puissance);
    echo $maVoiture3->puissantOuPas($puissance);
        echo '<hr/>';
    $nbPlace = 5; 
    $puissance = 500;
    $maVoiture4 = new Voiture("Citroën", "C4", $nbPlace);
    echo $maVoiture4->demarrer();
    echo $maVoiture4->grandeOuPetite($nbPlace);
    echo $maVoiture4->setPuissance($puissance);
    echo $maVoiture4->puissantOuPas($puissance);
    echo $maVoiture4->rouler();
