<?php

/**
 * Description of AfficheurJPEG
 *
 * @author edrichard
 */
class AfficheurJPEG implements Afficheur {
    
    public function afficher($imageGD){
        header("Content-type: image/jpeg");
        imagepng($imageGD);
    }
}
