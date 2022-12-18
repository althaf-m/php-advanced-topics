<?php

try {
    processCC();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
    echo $e->getPrevious()->getMessage() . "\n";
}

function processCC($number = null, $zipCode = null)
{
    try {
        validate($number, $zipCode);
    } catch (Exception $e) {
        throw new Exception('Invalid Inputs', null, $e);
    }

    echo "processed\n";
}

function validate($number, $zipCode)
{
    if (is_null($number)) {
        throw new Exception('No CC Number');
    }
}
