<?php

/**
 * Description of Personne
 *
 * @author edrichard
 */
class Personne {
    private $nom;
    private $prenom;
        
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenon() {
        return $this->prenon;
    }

    public function setPrenon($prenom) {
        if(preg_match("/[0-9]/", $prenom)){
            throw new ContienChiffreException($prenom);
        }
        $this->prenom = $prenom;
    }

    public function sePrésenter(){
        if(!isset($this->prenom)){
            throw new Exception("Il faut d'abord définir le prénom...");
        } 
        echo "je m'appelle $this->prenom.";
    }

}
