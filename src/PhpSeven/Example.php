<?php
declare(strict_types=1);
/**
 * Class demonstrating 
 * - scalar types (declarations, return type declarations)
 * - strict types¶
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */


namespace  SchrodtSven\PhpSeven;

class Example
{
    private ?int $id = null; # I know: Nullable types are yet to come in 7.1...

    // declaration and return types
    public function mean(int ...$ints) : float
    {
        return array_sum($ints) / count($ints);
    }

    // Null coalescing operator ¶

    public function getId(): int
    {
        return $this->id ?? 0;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

}


$foo = new Example();


var_dump($foo->mean(1, 44, 55 ,87)); #float(46.75)
echo $foo->getId(); # 0
echo $foo->setId(23)->getId(); # 23
// var_dump($foo->mean(1, 44, 55 ,87.9)); # Fatal error: Uncaught TypeError:



