<?php

function helloWorld(){
    echo 'Bonjour à tous !!!';
}

/**
 * Addition of two numbers
 * @param int $a
 * @param int $b
 * @return int
 */
function addition($a, $b){
    return $a + $b;
}

function pileOuFace(){
    $nbAlea = rand(0,1);
    
    if($nbAlea == 0){
        return 'Pile!';
    }
    return 'Face!';
}

/**
 * Multiplication of several numbers (double)
 * @return double
 */
function multiplication(){
    $nbs = func_get_args();
    $result = 1;
    
    foreach ($nbs as $nb) {
        $result *= $nb;
    }
    
    return $result;
}

/**
 * Affiche le prénom ($prenom) sinon affiche inconnu
 * @param string $prenom 
 */
function hi($prenom = "Inconnu"){
    echo "<p>Bonjour $prenom</p>";
}

function mozilla(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    
    if(strpos($ua, 'Mozilla') !== FALSE){
        echo 'Je suis mozilla!';
    } else {
        echo 'Je ne suis pas mozilla';
    }
}
