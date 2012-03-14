<?php
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }
    
    $monPersonnage = new Personne();
    $monFootballer = new Footballeur("Thierry", "Henry");
    $monFootballer->direBonjour();
    $monFootballer->sePresenter();
    $monFootballer->dribler();
    
    echo '<hr/>';
    
    $maVoiture4 = new Cabriolet("Renault", "Zoé", 1);
    echo $maVoiture4;
    
    echo '<hr/>';
    
    $maVoiture5 = new Cabriolet("Renault", "Mégane", 0);
    echo $maVoiture5;
