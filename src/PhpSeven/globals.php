<?php

declare(strict_types=1);
/**
 *  Global functions with minimal value
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

function randomizeValue(): mixed
{
    $tmp = [5, 8, 9, 17,23 ,'Foo', 'Bar'];

    return $tmp[array_rand($tmp)];
}