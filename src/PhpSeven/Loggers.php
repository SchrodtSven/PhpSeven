<?php

declare(strict_types=1);
/**
 *  Demonstrating the usage of anonymous classes
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpSeven
 * @package PhpSeven
 * @version 0.1
 * @since 2025-10-23
 */


interface Logger
{
    public function log(string $msg);
}

class Application
{
    private $logger;

    public function getLogger(): Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function touch(string $msg)
    {
        $this->logger->log($msg);
    }
}

$app = new Application;
$app->setLogger(new class implements Logger {
    public function log(string $msg)
    {
        printf(
            "%s - %s%s",
            date('Y-m-d H:i:s'),
            $msg,
            PHP_EOL
        );
    }
});
$app->touch('Foo'); # 2025-10-23 12:53:08 - Foo

var_dump($app->getLogger());
//object(Logger@anonymous)#2 (0) {
//}
