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

/**
 * Détermine le user agent du navigateur 
 */
function mozilla(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    
    if(strpos($ua, 'Mozilla') !== FALSE){
        echo 'Je suis mozilla!';
    } else {
        echo 'Je ne suis pas mozilla';
    }
}

/**
 * Remplace une chaine de caractère dans une string
 */
function replace($search, $replace, $subject, $nbJour){
    echo str_replace($search, $replace, $subject, $nbJour);
}

/**
 * Retourne le carré d'un nombre $a
 * @param int $a
 * @return int 
 */
function carre($a){
    return $a*$a;
}

/**
 * Retourne la valeur absolue d'un nombre
 * @param double $a
 * @return double 
 */
function absolue($a){
    return abs($a);
}

/**
 * Retourne l'inverse d'une chaine de caractères (string) 
 * @param string $mot
 * @return string 
 */
function reverse($mot){
    return strrev($mot);
}

/**
 * Retourne le nombre délément int qu'il y a dans un tableau
 * @param array $table
 * @return int 
 */
function countArray($table){
    $compteur = 0;
    foreach ($table as $value) {
        if(is_integer($value) == TRUE){
           $compteur++; 
        }
    }
    return $compteur;
}

/**
 * Retourne le factorielle d'un nombre
 * @param int $a
 * @return int 
 */
function fact($a){
    if($a == 0 || $a == 1){
        return 1;
    } else {
        return $a * fact($a-1);
    }
}