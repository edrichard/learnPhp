<?php
    header('Content-type: text/html; charset=UTF-8');
    
    $cp0 = "92000";
    if(preg_match("/^[0-9]{5}/", $cp0)){
        echo "<p>Code postal : $cp0 est valide...</p>";
    } else {
        echo "<p>Code postal : $cp0 est invalide...</p>";
    }
    
    $cp1 = "5v000";
    if(preg_match("/^[0-9]{5}/", $cp1)){
        echo "<p>Code postal : $cp1 est valide...</p>";
    } else {
        echo "<p>Code postal : $cp1 est invalide...</p>";
    }
    
    $firstname = "RENO Jean";
    $returnName = preg_replace("/^([a-zA-Z]+) ([a-zA-Z]+)$/", "$2 $1", $firstname);
    echo '<p>'.$returnName.'</p>';
    
    $email1 = "crote@botte.com";
    if(filter_var($email1, FILTER_VALIDATE_EMAIL)){
        echo "<p>Email : $email1 est valide...</p>";
    } else {
        echo "<p>Email : $email1 est invalide...</p>";
    }
    
    $email2 = "crotebotte.com";
    if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
        echo "<p>Email : $email2 est valide...</p>";
    } else {
        echo "<p>Email : $email2 est invalide...</p>";
    }