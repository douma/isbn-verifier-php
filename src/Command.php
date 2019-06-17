<?php

namespace Isbn;

class Command
{
    private $isbn;

    public function __construct(Isbn $isbn)
    {
        $this->isbn = $isbn;
    }

    public function run()
    {
        if(!isset($_SERVER['argv'][1])) {
            echo "Please supply a number" . PHP_EOL;
            exit;
        }

        if($this->isbn->isValid($_SERVER['argv'][1])) {
            echo "Valid" . PHP_EOL;
        } else {
            echo "Invalid" . PHP_EOL;
        }
    }
}
