<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpSeven\Anakin;

class AnakinTest extends TestCase
{


    public static function setUpBeforeClass(): void {}

    public static function tearDownAfterClass(): void {}



    public function testFoo()
    {
        //@FIXME - use data provider
        $entity = new Anakin(23.1);
        $this->assertTrue($entity->isLessThan(33));
        $this->assertTrue($entity->isGreaterThan(5));
        $this->assertTrue($entity->isEqual(23.1));
    }
}
