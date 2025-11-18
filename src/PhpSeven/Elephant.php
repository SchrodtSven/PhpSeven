<?php

declare(strict_types=1);
/**
 *  Demonstrating 
 *  - Typed properties
 *  - Arrow functions ¶
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */

namespace  SchrodtSven\PhpSeven;



class Elephant
{
    private string $name = 'elePHPant';

    private const UNICODE_SYMBOL = '🐘';

    private $mode = 'text';

    public int $uselessNumber = 23;


    public function setMode(string $mode='unicode')
    {
        $this->mode = $mode;
    }

    public function __toString(): string
    {
        return $this->mode == "text" ? $this->name : self::UNICODE_SYMBOL;
    }

    public function factorizeMe(array $nmbrz, $fctr = 2): array
    {
        
        return array_map(fn(int $n): int => $n * $fctr, $nmbrz);
    }

}


//$php = new Elephant();
// echo gettype($php->uselessNumber);
// $php->uselessNumber = 24;
// $php->setMode();
// echo $php;
$php = new Elephant();
var_dump($php->factorizeMe([23, 5, 8,9]));

