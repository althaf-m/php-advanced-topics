<?php

declare(strict_types=1);

function sum(int $a, int $b)
{
    return $a + $b;
}

echo sum(1.5, 2.5) . "\n"; // Fatal error: ...
