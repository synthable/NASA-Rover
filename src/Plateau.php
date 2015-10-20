<?php

class Plateau {

    private $startX = 0;
    private $startY = 0;
    private $endX;
    private $endY;

    public static function isValidSize($x, $y) {
        if($x < 1 || $y < 1 || $x > 100 || $y > 100) {
            return false;
        } else {
            return true;
        }
    }

    public function __construct($x, $y) {
        if(!self::isValidSize($x, $y)) {
            throw new Exception("Plateau size must be at least 1x1 and no more than 100x100.");
        }

        $this->endX = $x;
        $this->endY = $y;
    }

    public function isValidPosition($x, $y) {
        return $x <= $this->endX && $x >= $this->startX && $y <= $this->endY && $y >= $this->startY;
    }

    public function getSize() {
        return Array($this->endX, $this->endY);
    }
}
