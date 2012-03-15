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
    
    $log3 = LoggerFactory::create("File");
    $log3->log("Un message Factory...");
    
    function bidon(){
        $log3 = LoggerFactory::create("MySQL");
        $log3->log("Un message Factory...");
    }
    
    bidon();
    
    echo "Traitement réussit !";