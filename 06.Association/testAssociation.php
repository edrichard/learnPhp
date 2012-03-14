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
    
    echo "<hr/>";
    
    $monActeur1 = new Personne("Taylor", "Kitsch");
    $monRealisateur = new Personne("Andrew", "Stanton");
    $monFilm = new Films("John Carter", $monRealisateur);
    $monFilm->ajoutActeur($monActeur1);
    $monFilm->ajoutActeur(new Personne("Lynn", "Collins"));
    $monFilm->infoFilm();
    
    echo "<hr/>";
    
    $monActeur1 = new Personne("Taylor", "Kitsch");
    $monRealisateur = new Personne("Andrew", "Stanton");
    $monFilm = new Films("John Carter2", $monRealisateur);
    $monFilm->setDuree(7200);
    $monFilm->ajoutActeur($monActeur1);
    $monFilm->ajoutActeur(new Personne("Lynn", "Collins"));
    $monFilm->infoFilm();