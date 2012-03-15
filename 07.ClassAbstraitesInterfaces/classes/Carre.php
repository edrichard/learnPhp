<?php

/**
 * Description of Carre
 *
 * @author edrichard
 */
class Carre extends Rectangle {
    function __construct($cote) {
        parent::__construct($cote, $cote);
    }
    
    public function setHauteur($hauteur) {
        parent::setLargeur($hauteur);
        parent::setHauteur($hauteur);
    }

    public function setLargeur($largeur) {
        parent::setLargeur($largeur);
        parent::setHauteur($largeur);
    }


}
