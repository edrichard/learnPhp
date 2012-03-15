<?php

/**
 * Description of Dessinateur
 *
 * @author edrichard
 */
class Dessinateur {
    private $image;
    
    function __construct() {
        $this->image = imagecreatetruecolor(400,400);
        $bg = imagecolorallocate($this->image, 255, 255, 255);
        imagefill($this->image, 0, 0, $bg);
    }

    public function dessinerFigure(AbstractFigure $f){
        $colFigure = imagecolorallocate($this->image, 0, 0, 0);
        
        if($f instanceof Cercle){
            imageellipse($this->image, $f->getX(), $f->getY(), $f->getDiametre(), 
                    $f->getDiametre(), $colFigure);
        } elseif($f instanceof Rectangle) {
            imagerectangle($this->image, $f->getX(), $f->getY(), $f->getX()+$f->getLargeur(), 
                    $f->getY()+$f->getHauteur(), $colFigure);
            
        }
    }
    
    public function afficher(Afficheur $a){
        $a->afficher($this->image);
    }
    
    public function sauvegarder(Sauvegardeur $s){
        $s->sauvegarder($this->image);
    }
}
