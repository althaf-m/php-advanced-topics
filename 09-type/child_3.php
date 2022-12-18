<?php

class Table
{
    public function save($data)
    {
    }
}

class Mysql extends Table
{
    public function save($data): bool
    {
        return true;
    }
}

echo (new Mysql(null))->save(true) . "\n"; // 1
