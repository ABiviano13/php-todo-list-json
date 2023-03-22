<?php

$todo_string = file_get_contents('./items.json');

$todo_list = json_decode($todo_string, true);

header('Content-type: application/json');

echo json_encode($todo_list);