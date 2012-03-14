<?php   
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }
    
    $maVoiture1 = new Voiture("Renault", "Clio", 4, 500);   
    $monProprio1 = new Personne();
    $maVoiture1->setProprietaire($monProprio1);
    $maVoiture1->infos();
    
    echo "<hr/>";
    
    $chezPaolo = new Garage("Chez Paolo", "Vincennes");
    $chezPaolo->ajouterVoiture($maVoiture1);
    $chezPaolo->ajouterVoiture(new Voiture("Peugeot", "207+", 5, 150));
    $chezPaolo->infos();
    