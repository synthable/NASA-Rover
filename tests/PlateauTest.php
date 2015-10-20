<?php

class PlateauTest extends PHPUnit_Framework_TestCase {

    public function testValidPlateauSize() {
        $this->assertEquals(false, Plateau::isValidSize(0, 0));
        $this->assertEquals(false, Plateau::isValidSize(101, 101));
        $this->assertEquals(false, Plateau::isValidSize(-5, -5));

        $this->assertEquals(true, Plateau::isValidSize(5, 5));
        $this->assertEquals(true, Plateau::isValidSize(16, 4));
    }

    public function testValidPlateauPosition() {
        $plateau = new Plateau(8, 8);

        $this->assertEquals(false, $plateau->isValidPosition(-1, 0));
        $this->assertEquals(false, $plateau->isValidPosition(2, -4));
        $this->assertEquals(false, $plateau->isValidPosition(10, 1));
        $this->assertEquals(false, $plateau->isValidPosition(8, 9));

        $this->assertEquals(true, $plateau->isValidPosition(4, 4));
        $this->assertEquals(true, $plateau->isValidPosition(0, 0));
        $this->assertEquals(true, $plateau->isValidPosition(8, 8));
        $this->assertEquals(true, $plateau->isValidPosition(2, 4));
        $this->assertEquals(true, $plateau->isValidPosition(6, 2));
    }

    public function testNewPlateau() {
        $this->setExpectedException('Exception');

        new Plateau(-1, 101);
    }
}
