<?php
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

$logger = new \App\Log\HtmlLogger();

$animals = ['Cat', 'Dog', 'Sparrow', 'Rat'];

foreach ($animals as $animal) {
    $class = '\\App\\Zoo\\' . $animal;
    if (!class_exists($class)) {
        continue;
    }
    $model = new $class($logger);
    $model->live()->eat();
}

$logger->outputLog();