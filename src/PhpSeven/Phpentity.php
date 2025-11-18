<?php

declare(strict_types=1);
/**
 *  Demonstrating 
 *  - Nullable types
 *  - void return types
 *  - Class constant visibility 
 *  - Iterable Pseudo-Type
 *  - Flexible heredoc/nowdoc indentation
 *  - is_countable
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

namespace  SchrodtSven\PhpSeven;

use Closure;

class Phpentity
{
    // Nullable type
    private ?int $called = null;

    private string $name = 'elePHPant';

    private const UNICODE_SYMBOL = '🐘';

    // Class constant visibility 
    public const ID = 42.023;

    public function getCalled(): int
    {
        return $this->called ?? 0;
    }

    public function swap(&$left, &$right): void //void return type
    {
        if ($left === $right) {
            return;
        }

        $tmp = $left;
        $left = $right;
        $right = $tmp;
    }


    // Iterable Pseudo-Type  
    public function iterate_something(iterable $it)
    {
        foreach ($it as $element) {
            printf("Element:: %s%s", (string) $element, PHP_EOL);
        }
    }

    public function generate_something(): iterable
    {
        yield 1;
        yield 2;
        yield 3;
    }

    // Convert callables to Closures with Closure::fromCallable() ¶


    public function exposeFunction()
    {
        return Closure::fromCallable([$this, 'privateFunction']);
    }

    private function privateFunction($param)
    {
        var_dump($param);
    }

    public function welcome(string $name): string
    {
        $indent = "    ";
        return <<<WLC
        Hello $name,
        
        An example heredoc with the new flexible syntax
        The indentation before the closing marker is ignored.
        
        Lol,BOfH
        WLC;
    }


    public function sum(int ...$intNums): int
    {
        return array_sum($intNums);
    }

    // is_countable AND nullable return type

    public function countMeIfYouCan(mixed $item): ?int
    {
        if(is_countable($item))
            return count($item);
        else return null;

    }
}

// Convert callables to Closures with Closure::fromCallable() ¶
$privFunc = (new Phpentity)->exposeFunction();
$privFunc('some value');

//  Flexible heredoc/nowdoc indentation
$p = new Phpentity();
echo $p->welcome("Sven");


// Note the trailing comma after the last argument
var_dump($p->sum(
    1,
    2,
    3,
));

var_dump($p->countMeIfYouCan(23));

var_dump($p->countMeIfYouCan([23, 666, 42, 8, 5]));