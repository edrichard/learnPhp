<?php

/**
 * Description of Voiture
 *
 * @author edrichard
 */
class Voiture {
    protected $marque;
    protected $model;
    protected $nbPlace;
    protected $puissance;
    protected $proprietaire;
    
    function __construct($marque, $model, $nbPlace = 0, $puissance = 0) {
        $this->marque = (string) $marque;
        $this->model = (string) $model;
        $this->nbPlace = (int) $nbPlace;
        $this->puissance = (int) $puissance;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getNbPlace() {
        return $this->nbPlace;
    }

    public function setNbPlace($nbPlace) {
        $this->nbPlace = $nbPlace;
    }

    public function demarrer() {
        return "Je démarre $this->marque $this->model !<br/>";
    }
    
    public function getPuissance() {
        return $this->puissance;
    }

    public function setPuissance($puissance) {
        $this->puissance = $puissance;
    }
    
    public function getProprietaire() {
        return $this->proprietaire;
    }

    public function setProprietaire(Personne $proprietaire) {
        $this->proprietaire = $proprietaire;
        return $this;
    }
    
    public function infos(){
        echo "Marque : $this->marque <br/>";
        echo "Modele : $this->model <br/>";
        echo "Nombre de place : $this->nbPlace <br/>";
        echo "Puissance : $this->puissance <br/>";
        if($this->proprietaire != null){
            echo "Propriétaire : ".$this->proprietaire->getPrenom()." ".$this->proprietaire->getNom();
        }
    }

    public function __toString() {
        $str = "Marque : $this->marque <br/>";
        $str .= "Modele : $this->model <br/>";
        if($this->nbPlace != null){
            $str .= "Nombre de place : $this->nbPlace <br/>";
        }
        if($this->puissance != null){
            $str .= "Puissance : $this->puissance <br/>";
        }
        if($this->proprietaire != null){
            $str .= "Propriétaire : ".$this->proprietaire->getPrenom()." ".$this->proprietaire->getNom();
        }
        return $str;
    }

    public function grandeOuPetite($nbPlace) {
        if($nbPlace >= 5){
            return "Je suis une grande voiture!<br/>";
        } else {
            return "Je suis une petite voiture!<br/>";
        }
    }
    
    public function puissantOuPas($puissance) {
        if($puissance >= 1000){
            return "Je suis $this->model et je suis extrèmement puissant!<br/>";
        } else {
            return "Je suis $this->model et je suis pas extrèmement puissant!<br/>";
        }
    }
    
    public function rouler(){
        $vitesse = rand(0,300);
        return "Je roule à $vitesse km/h!";
    }
}
