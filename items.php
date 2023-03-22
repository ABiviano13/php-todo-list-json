<?php

$items = [
    'html',
    'css',
    'javascript',
    'php',
    'laravel'
];

header('Content-type: application/json');

echo json_encode($items);