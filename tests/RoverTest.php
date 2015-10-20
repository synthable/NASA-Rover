<?php

class RoverTest extends PHPUnit_Framework_TestCase {

    public function testRoverRotate() {
        $rover = new Rover(1, 1, "N");
        $this->assertEquals("W", $rover->rotate("L")->getHeading());
        $this->assertEquals("S", $rover->rotate("L")->getHeading());
        $this->assertEquals("E", $rover->rotate("L")->getHeading());
        $this->assertEquals("N", $rover->rotate("L")->getHeading());

        $this->assertEquals("E", $rover->rotate("R")->getHeading());
        $this->assertEquals("S", $rover->rotate("R")->getHeading());
        $this->assertEquals("W", $rover->rotate("R")->getHeading());
        $this->assertEquals("N", $rover->rotate("R")->getHeading());
    }

    public function testRoverMove() {
        $rover = new Rover(2, 5, "N");
        $this->assertSame(Array(2, 6, "N"), $rover->forward()->getPosition());
        $this->assertSame(Array(2, 7, "N"), $rover->forward()->getPosition());

        $this->assertSame(Array(1, 7, "W"), $rover->rotate("L")->forward()->getPosition());
        $this->assertSame(Array(0, 7, "W"), $rover->forward()->getPosition());
        $this->assertSame(Array(-1, 7, "W"), $rover->forward()->getPosition());
    }
}
