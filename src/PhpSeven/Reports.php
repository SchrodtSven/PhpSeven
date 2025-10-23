<?php
declare(strict_types=1);
/**
 * Class demonstrating 
 * - Covariance and 
 * - Contravariance ¶
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */


namespace  SchrodtSven\PhpSeven;

abstract class  Report
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function render();
}

class DashReport extends  Report
{
    public function render()
    {
        echo $this->name . " implemented with Plotly Dash";
    }
}

class BIReport extends  Report 
{
    public function render()
    {
        echo $this->name . " implemented with M$ Power BI";
    }
}

interface ReportFactory
{
    public function build(string $name): Report;
}