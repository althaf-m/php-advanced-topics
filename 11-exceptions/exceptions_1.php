<?php

try {
    processCC();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

function processCC($number = null, $zipCode = null)
{
    if (is_null($number)) {
        throw new Exception('No CC Number');
    }

    echo "processed\n";
}
