<?php

/**
 * Description of Rectangle
 *
 * @author edrichard
 */
class Rectangle extends AbstractFigure {
    protected $largeur;
    protected $hauteur;
    
    function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }
    
    public function getLargeur() {
        return $this->largeur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function aire() {
        return $this->hauteur * $this->hauteur;
    }

    public function perimetre() {
        return 2 * ($this->hauteur + $this->hauteur);
    }
}

