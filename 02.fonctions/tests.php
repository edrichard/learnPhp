<?php
    header('Content-type: text/html; charset=UTF-8');
    include 'fonctions.php';
    
    helloWorld();
    
    echo '<p>'.addition(5, 5).'</p>';
    
    echo '<p>'.pileOuFace().'</p>';
    
    echo '<p>'.multiplication(5, 6).'</p>';
    echo '<p>'.multiplication(5, 6, 10).'</p>';
    echo '<p>'.multiplication(5, 6,3).'</p>';
    
    hi();
    hi('Eddy');
    $firstname = "Fred";
    hi($firstname);
    
    mozilla();
    
    echo '<br><br>';
    
    replace();
    
    echo '<p>'.carre(2).'</p>';
    echo '<p>'.carre(-2).'</p>';
    
    echo '<p>'.absolue(-50).'</p>';
    echo '<p>'.absolue(-4.6).'</p>';
    
    echo '<p>'.reverse("Bonjour").'</p>';
    
    $table = array("banane", "carrote", "pomme", "cerise", 2, 3, 5);
    echo '<p>Le nombre d\'élément est : '.countArray($table).'</p>';

    echo '<p>Le factorielle de 0 : '.fact(0).'</p>';
    echo '<p>Le factorielle de 5 : '.fact(5).'</p>';