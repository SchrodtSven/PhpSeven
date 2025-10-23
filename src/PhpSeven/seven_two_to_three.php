<?php

declare(strict_types=1);
/**
 * Demonstrating:
 * 
 * - New object type 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

// New object type 

function test(object $obj) : object
{
    return new SplQueue();
}

test(new stdClass());


// Abstract method overriding ¶

abstract class A
{
    abstract function test(string $s);
}
abstract class B extends A
{
    // overridden - still maintaining contravariance for parameters and covariance for return
    abstract function test($s) : int;
}


// Key Conversion for Object/Array Casts 


$a = ["42" => 'x', 1.7 => 'y', true => 't', null => 'n'];
$o = (object)$a;           // properties named "42", "1", "1", ""
$b = (array)$o;            // keys are re-cast just like array keys

