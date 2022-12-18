<?php

class Table
{
    public function save(array $data)
    {
    }
}

class Mysql extends Table
{
    public function save(bool $data)
    {
        return true;
    }
}

echo (new Mysql(null))->save(true) . "\n"; // Warning: ... // 1
