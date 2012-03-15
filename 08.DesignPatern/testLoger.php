<?php
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }
    
    $log = FileLoger::getInstance();
    $log->log("Un message !");
    $log->log("Un autre message!");
    