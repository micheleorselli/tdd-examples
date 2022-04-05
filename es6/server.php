<?php

require_once __DIR__ . '/Slugger.php';

header('Content-Type: application/json');

if (!isset($_GET['string'])) {
    http_response_code(400);

    echo json_encode(['error' => 'input missing']);
    exit;
}

$stringToConvert = $_GET['string'];

$slugger = new Slugger();
$converted = $slugger->slugify($stringToConvert);

http_response_code(200);

echo json_encode([
    'input' => $stringToConvert,
    'output' => $converted
]);

exit;

