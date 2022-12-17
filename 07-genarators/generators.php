<?php

function fizzbuzz($limit)
{
    $i = 0;

    while ($i <= $limit) {
        $yield = null;

        if ($i && $i % 3 === 0) $yield = 'fizz';
        if ($i && $i % 5 === 0) $yield .= 'buzz';

        yield $i => $yield;

        $i++;
    }

    return;
}

foreach (fizzbuzz(25) as $key => $value) {
    echo "{$key} => {$value}\n";
}

/*
function &countDown($value)
{
    while ($value > 0) yield $value;
}

foreach (countDown(3) as &$val) {
    echo "{$val}\n";
    $val--;
}
*/
