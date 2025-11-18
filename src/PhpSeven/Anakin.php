<?php
declare(strict_types=1);

/**
 * Class demonstrating 
 * - Spaceship operator
 *  
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */
namespace  SchrodtSven\PhpSeven;
class Anakin
{
    private float $value;

    public function __construct(float $value = 0)
    {
        $this->value =$value;
    }

    /**
     * Generic calculation function with spaceship operator
     */
    private function calc(float $number) : int
    {
        return $this->value <=> $number;
    }

    public function isLessThan(float $number) : bool
    {
        return $this->calc($number) == -1;
    }

    public function isGreaterThan(float $number) : bool
    {
        return $this->calc($number) == 1;
    }

    public function isEqual(float $number) : bool
    {
        return $this->calc($number) == 0;
    }
}


// Tests moved to tests/AnakinTest.php

// $entity = new Anakin(23.1);
// assert($entity->isLessThan(33));
// assert($entity->isGreaterThan(5));
// assert($entity->isEqual(23.1));