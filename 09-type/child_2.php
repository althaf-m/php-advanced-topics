<?php

class Table
{
    public function save($data): array
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

echo (new Mysql(null))->save(true) . "\n"; // Fatal error: ...
