<?php

class Rover {
    private $x;
    private $y;
    private $heading;
    private $moves;

    public function __construct($x, $y, $heading, $moves = Array()) {
        $this->x = $x;
        $this->y = $y;
        $this->heading = $heading;
        $this->moves = $moves;
    }

    public function moveOne($action) {
        switch($action) {
            case "L":
            case "R":
                $this->rotate($action);
                break;
            case "M":
                $this->forward();
                break;
            default:
                break;
        }
        return $this;
    }

    public function move() {
        foreach($this->moves as $move) {
            $this->moveOne($move);
        }
        return $this;
    }

    public function rotate($direction) {
        switch($this->heading) {
            case "N":
                $this->heading = $direction == "L" ? "W" : "E";
                break;
            case "S":
                $this->heading = $direction == "L" ? "E" : "W";
                break;
            case "E":
                $this->heading = $direction == "L" ? "N" : "S";
                break;
            case "W":
                $this->heading = $direction == "L" ? "S" : "N";
                break;
            default:
                break;
        }
        return $this;
    }

    public function forward() {
        switch($this->heading) {
            case "N":
                $this->y++;
                break;
            case "E":
                $this->x++;
                break;
            case "S":
                $this->y--;
                break;
            case "W":
                $this->x--;
                break;
        }
        return $this;
    }

    public function getPosition() {
        return Array($this->x, $this->y, $this->heading);
    }

    public function getHeading() {
        return $this->heading;
    }
}





