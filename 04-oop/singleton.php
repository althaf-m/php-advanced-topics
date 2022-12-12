<?php

class Singleton
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class.
     */
    protected static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * 
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the 'new' operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     */
    private function __wakeup()
    {
    }
}

class SingletonChild extends Singleton
{
    protected static $instance;
}

$object = Singleton::getInstance();
var_dump($object === Singleton::getInstance()); // bool(true)

$anotherObject = SingletonChild::getInstance();
var_dump($anotherObject === Singleton::getInstance()); // bool(false)

var_dump($anotherObject === SingletonChild::getInstance()); // bool(true)
