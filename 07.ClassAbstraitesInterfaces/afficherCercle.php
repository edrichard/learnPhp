<?php
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }

    $monCercle = new Cercle(150);
    $monCercle->setX(150);
    $monCercle->setY(150);
    
    $monRectangle = new Rectangle(100, 50);

    $dessinateur = new Dessinateur();
    $afficheur = new AfficheurPNG();

    $dessinateur->dessinerFigure($monCercle);
    $dessinateur->dessinerFigure($monRectangle);

    $dessinateur->afficher($afficheur);
