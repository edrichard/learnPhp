<?php

/**
 * Description of ContienChiffreException
 *
 * @author edrichard
 */
class ContienChiffreException extends Exception {
    private $chaineFautive;
    
    function __construct($chaineFautive) {
        parent::__construct("La chaine de caractère contient un ou des chiffres !");
        $this->chaineFautive = $chaineFautive;
    }
    
    public function getChaineFautive() {
        return $this->chaineFautive;
    }
}
