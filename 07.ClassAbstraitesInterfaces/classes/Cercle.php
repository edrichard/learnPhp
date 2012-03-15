<?php

/**
 * Description of Cercle
 *
 * @author edrichard
 */
class Cercle extends AbstractFigure {
    protected $diametre;
    
    function __construct($diametre) {
        $this->diametre = $diametre;
    }

    public function getDiametre() {
        return $this->diametre;
    }

    public function setDiametre($diametre) {
        $this->diametre = $diametre;
    }
    
    public function aire() {
        $rayon = $this->diametre / 2;
        return pi() * $rayon * $rayon;
    }
    
    public function perimetre() {
        return pi() * $this->diametre;
    }
}

?>
