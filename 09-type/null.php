<?php

function say(?string $message)
{
    if ($message) {
        echo "{$message}\n";
    }
}

say(null); // (does not print)
say('foo'); // foo
