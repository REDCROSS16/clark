<?php

namespace App\Patterns\Creational\Singletone;

class Singleton
{
    private static $instances = [];
    private static $singleInstance;

    protected function __construct() {

    }

    public static function getInstance(): Singleton
    {
        $class = static::class;

        if (isset(self::$instances[$class])) {
            return self::$instances[$class];
        }

        self::$instances[$class] = new static();
        return self::$instances[$class];
     }

    public static function getSingleInstance(): Singleton
    {
        if (isset(self::$singleInstance)) {
            return self::$singleInstance;
        }

        self::$singleInstance = new static();
        return self::$singleInstance;
    }


    public function printName(): void
    {
        echo static::class . '<br>';
    }

    public function singletoneLogic()
    {
        echo 'some logic';
    }

}