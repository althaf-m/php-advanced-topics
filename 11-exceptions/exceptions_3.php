<?php

try {
    processCC();
} catch (Exception $e) {
    echo get_class($e) . ' | ' . $e->getMessage() . "\n";
    echo get_class($e->getPrevious())
        . ' | '
        . $e->getPrevious()->getMessage() . "\n";
}

function processCC($number = null, $zipCode = null)
{
    try {
        validate($number, $zipCode);
    } catch (Exception $e) {
        throw new BadFunctionCallException('Invalid Inputs', null, $e);
    }

    echo "processed\n";
}

function validate($number, $zipCode)
{
    if (is_null($number)) {
        throw new InvalidArgumentException('No CC Number');
    }
}
