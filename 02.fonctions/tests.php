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
