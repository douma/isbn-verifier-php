<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$command = new \Isbn\Command(new \Isbn\Isbn());
$command->run();