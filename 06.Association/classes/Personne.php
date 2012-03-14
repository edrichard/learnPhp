<?php

/**
 * Description of Personne
 *
 * @author edrichard
 */
class Personne {
    private $prenom;
    private $nom;
    
    public function __construct($prenom = "John", $nom = "Doe") {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }


    public function direBonjour(){
        echo "Bonjour <br/>";
    }
    
    public function sePresenter(){
        echo "Je m'appelle $this->nom $this->prenom <br/>";
    }
    
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenon($prenom){
        $this->prenom = $prenom;
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }
}
