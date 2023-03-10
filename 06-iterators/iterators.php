<?php

class BasicIterator extends IteratorIterator
{
    public function __construct($pathToFile)
    {
        /**
         * Call the parent constructor with a SplFileObject (also Traversable)
         * for the given path.
         */
        parent::__construct(new SplFileObject($pathToFile, 'r'));

        // These set up the inner SplFileObject's properties to to process csv.
        $file = $this->getInnerIterator();
        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',', '"', '\\');
    }
}

class FilterRows extends FilterIterator
{
    public function accept()
    {
        $current = $this->getInnerIterator()->current();

        if (count($current) === 1) {
            return false;
        }

        return true;
    }
}

$filePath = __DIR__ . '/data.csv';
$iterator = new BasicIterator($filePath);
$iterator = new FilterRows($iterator);

foreach ($iterator as $i => $row) {
    var_dump($row);
}
