<?php

/**
 * Description of Garage
 *
 * @author edrichard
 */
class Garage {
    private $nom;
    private $adresse;
    private $voitures;
   
    function __construct($nom, $adresse) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->voitures = array();
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function ajouterVoiture(Voiture $v){
        $this->voitures[]=$v;
    }
    
    public function infos(){
        echo "Nom : ".$this->getNom()."<br/>";
        echo "Adresse : ".$this->getAdresse()."<br/>";
       
        foreach ($this->voitures as $v){
            echo "Voiture : ".$v->getMarque()."<br/>";
        }
    }
   
}
