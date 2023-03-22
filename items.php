<?php

$todo_string = file_get_contents('./items.json');

header('Content-type: application/json');

echo json_encode($todo_string);