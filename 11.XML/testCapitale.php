<?php
    
    $client = new SoapClient(null,array('location' => 'http://192.168.1.138/10-XML/SoapServeur.php',
                        'uri' => 'toto' ));
    echo "Capital de la France : ".$client->getCapitale("France")."<br/>";
    