<?php

declare(strict_types=1);
/**
 * Demonstrating:
 * 
 * - Symmetric array destructuring  ¶
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

// Symmetric array destructuring  instead of list() usage

$data = [
    [1, 'Gwen'],
    [2, 'MJ'],
    [4, 'Betty'],
    [8, 'Felicia'],
];

[$id1, $name1] = $data[1];
 printf("id: %s, name:%s%s", $id1, $name1, PHP_EOL);

foreach ($data as [$id, $name]) {
    printf("id: %s, name:%s%s", $id, $name, PHP_EOL);
}

// Support for negative string offsets ¶

var_dump("abcdef"[-2]);
var_dump(strpos("aabbcc", "b", -3));