<?php

require dirname(__FILE__)  .'/../src/Plateau.php';
require dirname(__FILE__)  .'/../src/Rover.php';

class MissionControl {

    private $plateau;
    private $rovers = Array();
    private $input = Array();

    public function __constructor() {
    }

    public function getPlateau() {
        return $this->plateau;
    }

    public function getInput() {
        return $this->input;
    }

    public function getRovers() {
        return $this->rovers;
    }

    public function readInput($resource) {
        while($line = fgets($resource)) {
            array_push($this->input, trim($line));
        }
        return $this;
    }

    public function createPlateau() {
        $size = explode(" ", array_shift($this->input));
        $this->plateau = new Plateau($size[0], $size[1]);
        return $this;
    }

    public function createRovers() {
        for($x = 0;$x != count($this->input); $x += 2) {
            $args = explode(" ", $this->input[$x]);
            $moves = str_split($this->input[$x+1]);

            $rover = new Rover($args[0], $args[1], $args[2], $moves);
            array_push($this->rovers, $rover);
        }
        return $this;
    }

    public function run() {
        foreach($this->rovers as $rover) {
            $rover->move();
        }
    }
}
