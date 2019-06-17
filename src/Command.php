<?php

namespace Isbn;

class Command
{
    public function run()
    {
        $isbn = new Isbn();

        if(!isset($_SERVER['argv'][0])) {
            echo "Please supply a number" . PHP_EOL;
            exit;
        }

        if($isbn->isValid($_SERVER['argv'][0])) {
            echo "Valid" . PHP_EOL;
        } else {
            echo "Invalid" . PHP_EOL;
        }
    }
}
