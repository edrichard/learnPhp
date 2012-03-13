<?php
    header('Content-type: text/html; charset=UTF-8');
    
    $cp = "92000";
    if(preg_match("/^[0-9]{5}/", $cp)){
        echo '<p>Code postal valide...</p>';
    } else {
        echo '<p>Code postal invalide...</p>';
    }
    
    $firstname = "RENO Jean";
    $returnName = preg_replace("/^([a-zA-Z]+) ([a-zA-Z]+)$/", "$2 $1", $firstname);
    echo '<p>'.$returnName.'</p>';
    
    $email = "crote@botte.com";
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<p>Email valide...</p>';
    } else {
        echo '<p>Email invalide...</p>';
    }