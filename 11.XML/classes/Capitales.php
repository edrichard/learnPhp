<?php

/**
 * Description of Capitales
 *
 * @author edrichard
 */
class Capitales {
    private $capitales = array("France" => "Paris", "Espagne" => "Madrid", "Allemagne" => "Berlin");
    
    public function getCapital($pays){
        if(isset($this->capitales[$pays])){
            return $this->capitale;
        }
        return "Inconnue";
    }
}

?>
