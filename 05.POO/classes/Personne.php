<?php

/**
 * Description of Personne
 *
 * @author edrichard
 */
class Personne {
    private $prenom = "John";
    private $nom = "Do";
    
    public function direBonjour(){
        echo "Bonjour";
    }
    
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenon($prenom){
        $this->prenom = $prenom;
    }

    public function getNom(){
        return $this->prenom;
    }
    
    public function setNom($nom){
        $this->nom = "$nom";
    }
}
