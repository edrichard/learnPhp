<?php

/**
 * Description of Cabriolet
 *
 * @author edrichard
 */
class Cabriolet extends Voiture {
    private $capote;
    
    public function __construct($marque, $model, $capote=0) {
        parent::__construct($marque, $model);
        $this->capote = $capote;
    }
    
    public function __toString() {
        $str = parent::__toString();
        if($this->capote)
          $str .= "J'ai une capote";
        else 
          $str .= "je n'ai pas de capote";
        return $str;
    }
}

?>
