<?php

/**
 *
 * @author edrichard
 */
class AfficheurPNG implements Afficheur {
    
    public function afficher($imageGD){
        header("Content-type: image/png");
        imagepng($imageGD);
    }
}

