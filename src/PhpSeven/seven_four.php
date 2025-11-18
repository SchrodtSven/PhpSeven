<?php

declare(strict_types=1);
require_once 'src/PhpSeven/globals.php';
/**
 * Demonstrating:
 * - 
 *  
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

$a = [23, 44,9];
$b = [23, 44,9];
var_dump($a == $b);

var_dump($a === $b);

# Null coalescing assignment operator ??=
$array = [];

$array['key'] ??= randomizeValue();
var_dump($array);
// is roughly equivalent to
// if (!isset($array['key'])) {
//     $array['key'] = randomizeValue();
// }


# Numeric literal separator ¶

$foo_sc = 3.141_592-11; // float
$foo_dec = 299_792_458;   // decimal
$foo_dead = 0xDEAD_BEEF;   // hexadecimal
$foo_bin = 0b0101_1111;   // binary

print_r([$foo_bin, $foo_dead, $foo_dec, $foo_sc]);