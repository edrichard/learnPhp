<?php
    require_once 'classes/Capitales.php';
    
    $serveur = new SoapServer(null, array('uri' => 'toto'));
    $serveur->setClass('Capitales');
    $serveur->handle();
    