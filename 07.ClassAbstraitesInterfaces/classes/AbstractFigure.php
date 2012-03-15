<?php

/**
 * Description of AbstractFigure
 *
 * @author edrichard
 */
abstract class AbstractFigure {
    protected $x;
    protected $y;
    
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
        return $this;
    }

    public abstract function aire();
    public abstract function perimetre();
}
