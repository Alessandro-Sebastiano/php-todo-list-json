<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: x-Requested-With');


$tasks = file_get_contents('../database/data.json');

header('Content-Type: application/json');
echo $tasks;
