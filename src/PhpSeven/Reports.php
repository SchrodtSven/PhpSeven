<?php

declare(strict_types=1);
/**
 * Classes/interfaces demonstrating 
 * - Covariance and 
 * - Contravariance ¶
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */


namespace SchrodtSven\PhpSeven;

# Covariance

printf("Covariance%s", PHP_EOL);

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
        printf("%s implemented with Plotly Dash%s", $this->name, PHP_EOL);
    }
}

class BIReport extends  Report
{
    public function render()
    {
        printf("%s implemented with M$ Power BI%s", $this->name, PHP_EOL);
    }
}

interface ReportFactory
{
    public function build(string $name): Report;
}

class BIFactory implements ReportFactory
{
    public function build(string $name): BIReport
    {
        return new BIReport($name);
    }
}

class DashFactory implements ReportFactory
{
    public function build(string $name): DashReport
    {
        return new DashReport($name);
    }
}


$bookOne = (new BIFactory)->build("A. new Report");

$bookTwo = (new DashFactory)->build("B. new Report");

$bookOne->render();

$bookTwo->render();


printf("Contravariance%s", PHP_EOL);

class Account {}

class BankAccount extends Account {}

abstract class User
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function consume(BankAccount $account)
    {
        printf("%s consumes %s%s", $this->name, $account::class, PHP_EOL);
    }
}

class FooUser extends User
{
    public function consume(Account $account)
    {
        printf("%s consumes %s%s", $this->name, $account::class, PHP_EOL);
    }
}


$usrOne = new FooUser("Gwen");
$usrOne->consume(new Account());

$usrOne = new FooUser("Mary Jane");
$usrOne->consume(new BankAccount());
