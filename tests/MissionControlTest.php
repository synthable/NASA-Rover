<?php

class MissionControlTest extends PHPUnit_Framework_TestCase {

    public function testRun() {
        $mc = new MissionControl();

        $file = fopen(dirname(__FILE__) ."/data/input", "r");
        $mc->readInput($file);
        $this->assertSame(Array(
            "5 5", "1 1 N", "LLLLM", "2 2 S", "LLLM"
        ), $mc->getInput());

        $mc->createPlateau();
        $this->assertSame(Array("5", "5"), $mc->getPlateau()->getSize());

        $rovers = $mc->createRovers()->getRovers();
        $this->assertEquals(2, count($rovers));

        $mc->run();

        $this->assertEquals(Array(1, 2, "N"), $rovers[0]->getPosition());
        $this->assertEquals(Array(1, 2, "W"), $rovers[1]->getPosition());
    }
}
