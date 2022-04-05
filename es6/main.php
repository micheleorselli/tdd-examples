<?php

require_once __DIR__ . '/Slugger.php';

if (!isset($argv[1])) {
    throw new RuntimeException('no enough arguments');
}

$stringToConvert = $argv[1];

$slugger = new Slugger();
$converted = $slugger->slugify($stringToConvert);

echo "\nconverted string: $converted\n";