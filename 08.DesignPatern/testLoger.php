<?php
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }
    
    $log = FileLoger::getInstance();
    $log->log("Un message !");
    $log->log("Un autre message!");
    
    $log2 = MySqlLoger::getInstance();
    $log2->log("Un message !");
    $log2->log("Un autre message!");
    
    echo "Traitement réussit !";