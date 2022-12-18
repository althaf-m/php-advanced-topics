<?php

class InvalidCCNumberException extends InvalidArgumentException
{
    public function __construct(
        $message = 'No CC Number',
        $code = 0,
        $previous = null
    ) {
        return parent::__construct($message, $code, $previous);
    }
}

try {
    processCC();
} catch (InvalidCCNumberException $e) {
    echo get_class($e) . ' | ' . $e->getMessage() . "\n";
}

function processCC($number = null, $zipCode = null)
{
    try {
        validate($number, $zipCode);
    } catch (Exception $e) {
        throw $e;
    }

    echo "processed\n";
}

function validate($number, $zipCode)
{
    if (is_null($number)) {
        throw new InvalidCCNumberException();
    }
}
