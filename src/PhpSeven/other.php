<?php
declare(strict_types=1);
/**
 * Demonstrating:
 * 
 * - constant arrays ausing define
 * - Unicode codepoint escape syntax ¶
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

// Constant arrays using define() ¶

define('ENEMIES', [
    'Doc Ock',
    'Vulture',
    'Sandman',
    'Green Goblin'
]);

printf("The enemy of the day: %s", ENEMIES[array_rand(ENEMIES)]);

// Unicode codepoint escape syntax ¶

echo "\u{aa}", PHP_EOL;
echo "\u{0000aa}", PHP_EOL;

echo "\u{1F418}", PHP_EOL;

echo <<<EOT
\u{01f418}
EOT;

// Closure::call() is a more performant, shorthand way of temporarily binding an object scope to a closure and invoking it.

class A {private $x = 1;}

// Pre PHP 7 code
$getX = function() {return $this->x;};
$getXCB = $getX->bindTo(new A, 'A'); // intermediate closure
echo $getXCB();

// PHP 7+ code
$getX = function() {return $this->x;};
echo $getX->call(new A);
