<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: x-Requested-With');


$tasks = file_get_contents('../database/data.json');
$tasks_list = json_decode($tasks);



if (isset($_POST['newTask'])) {

    $newTask = [
        'text' => $_POST['newTask'],
        'done' => false,
    ];


    array_push($tasks_list, $newTask);

    file_put_contents('../database/data.json', json_encode($tasks_list));

    header('Content-Type: application/json');
    echo json_encode($tasks_list);
} else {

    header('Content-Type: application/json');
    echo json_encode($tasks_list);
}
