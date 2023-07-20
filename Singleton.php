<?php

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function someMethod()
    {
        // функционал
    }
}

$singleton = Singleton::getInstance();
$singleton->someMethod();
