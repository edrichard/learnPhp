<?php

/**
 * Description of Voiture
 *
 * @author edrichard
 */
class Voiture {
    private $marque;
    private $model;
    private $nbPlace;
    
    function __construct($marque, $model, $nbPlace) {
        $this->marque = $marque;
        $this->model = $model;
        $this->nbPlace = $nbPlace;
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
    
    public function grandeOuPetite($nbPlace) {
        if($nbPlace >= 5){
            return "Je suis une grande voiture!<br/>";
        } else {
            return "Je suis une petite voiture!<br/>";
        }
    }
}
