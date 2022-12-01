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

    // header('Content-Type: application/json');
    // echo json_encode($tasks_list);
} else if (isset($_POST['selectIndex'])) {

    $taskIndex = $_POST['selectIndex'];

    if ($tasks_list[$taskIndex]->done == 0) {
        $tasks_list[$taskIndex]->done = true;
    } else {
        $tasks_list[$taskIndex]->done = false;
    }

    file_put_contents('../database/data.json', json_encode($tasks_list));
} else if (isset($_POST['removeIndex'])) {

    $removeTaskIndex = $_POST['removeIndex'];

    array_splice($tasks_list, $removeTaskIndex, 1);

    file_put_contents('../database/data.json', json_encode($tasks_list));
} else {

    header('Content-Type: application/json');
    echo json_encode($tasks_list);
}
