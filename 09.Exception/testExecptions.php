<?php
    function __autoload($nomClasse){
        require_once "classes/$nomClasse.php";
    }
    
    $p = new Personne();
    
    try{
       $p->setPrenon("Eric"); 
       $p->sePrésenter(); 
    } catch (ContienChiffreException $e){
        echo $e->getChaineFautive()." n'est pas très courant comme prénom...";
    } catch (Exception $e){
        echo "Une erreur s'est produite, message :".$e->getMessage();
    }
    