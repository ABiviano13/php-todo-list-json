<?php

$todo_string = file_get_contents('./items.json');

$todo_list = json_decode($todo_string, true);

$response = [
  'results' => $todo_list,
  'success' => true
];

header('Content-type: application/json');

echo json_encode($response);