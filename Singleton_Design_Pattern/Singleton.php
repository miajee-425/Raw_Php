<?php

class Singleton
{
    private static $instance = null;
    private static $instances = [];

    private final function __construct()
    {
    }

    private final function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private final function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance()
    {
        $class = get_called_class();

        if (!isset(static::$instances[$class])) {
            static::$instances[$class] = new static();
        }
        return static::$instances[$class];
    }

    /*    public static function getInstance()
        {
            if (is_null(static::$instance)) {
                static::$instance = new static;
            }

            return static::$instance;
        }*/

}

class DB extends Singleton
{
    public $data = "DB";
}

class Logger extends Singleton
{
    public $data = "Logger";
}

$db = DB::getInstance();
$logger = Logger::getInstance();
var_dump($db);
var_dump($logger);
dd($db, $logger);
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
#$singleton3 = clone Singleton::getInstance();
dd($singleton1 === $singleton2);
?>