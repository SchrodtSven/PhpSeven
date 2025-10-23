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