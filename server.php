<?php
// decode json
$string = file_get_contents("todo.json");
$toDoList = json_decode($string, true);
// /decode json

// if newTodo set on post
if (isset($_POST["newToDo"])) {
    $new_to_do = $_POST["newToDo"];
    $toDoList[] = [
        "text" => $new_to_do,
        "done" => false,
    ];
    // put in json
    file_put_contents("todo.json", json_encode($toDoList));
}


// send data
header("Content-Type: application/json");
// encode json
echo json_encode($toDoList);
// encode json
// /send data