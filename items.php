<?php

$todo_string = file_get_contents('./items.json');

$todo_list = json_decode($todo_string, true);


$new_task = isset($_POST['task']) ? $_POST['task'] : null;

$response = [
  'text' => $new_task,
  'done' => true
];

if ($new_task !== null) {
  $todo_list[] = $response;
}

$new_array_string = json_encode($todo_list);
file_put_contents('./items.json', $new_array_string);



header('Content-type: application/json');

echo $new_array_string;