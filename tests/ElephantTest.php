<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpSeven\Elephant;
use TypeError;

class ElephantTest extends TestCase
{


    public static function setUpBeforeClass(): void {}

    public static function tearDownAfterClass(): void {}



    public function testType()
    {
        $php = new Elephant();
        $this->assertTrue(gettype($php->uselessNumber) == "integer");
    }

    public function testIfTypeExceptionIsThrown()
    {
        $this->expectException(TypeError::class);
        $php = new Elephant();
        $php->uselessNumber = "Foo";
    }
}
