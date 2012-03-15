<?php
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }
    
    $monCercle = new Cercle(10);
    echo "<h5>Le cercle :</h5>";
    echo "Aire : ".$monCercle->aire()."<br/>";
    echo "Périmètre : ".$monCercle->perimetre()."<br/>";
    
    echo "<hr/>";
    
    $monCarre = new Carre(5);
    echo "<h5>Le carré :</h5>";
    echo "Aire : ".$monCarre->aire()."<br/>";
    echo "Périmètre : ".$monCarre->perimetre()."<br/>";
    
    echo "<hr/>";
    
    $monRectangle = new Rectangle(5, 10);
    echo "<h5>Le rectangle :</h5>";
    echo "Aire : ".$monRectangle->aire()."<br/>";
    echo "Périmètre : ".$monRectangle->perimetre()."<br/>";
    
    echo "<hr/>";
    
    $figures = array();
    $figures[] = new Carre(3);
    $figures[] = new Rectangle(3, 4);
    $figures[] = new Cercle(3);
    $figures[] = new Carre(4);
    $figures[] = new Rectangle(5, 6);
    
    foreach ($figures as $value) {
        echo "Aire de la figure : ".$value->aire()."<br/>";
        echo "Périmètre de la figure : ".$value->perimetre()."<br/>";
        echo "<br/>";
    }