<?php

class IsPositiveInt
{
    public function __invoke($value)
    {
        return ($value == (int)$value && $value > 0); // type checking avoided
    }
}

$invoke = new IsPositiveInt();
var_dump($invoke(5));
var_dump($invoke('5'));
var_dump($invoke(5.0));
var_dump($invoke(-5));
var_dump($invoke(5.1));
