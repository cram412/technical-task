<?php
require __DIR__ . '/vendor/autoload.php';

$animals = ['Cat', 'Dog', 'Sparrow', 'Rat'];

foreach ($animals as $animal) {
    $model = \Zoo\Factory::create($animal);
    $model->live()->eat();
}

\Log\Logger::getInstance()->renderLog();