<?php

$list_json = file_get_contents('./list.json');
$list = json_decode($list_json);

header('Content-Type: application/json');

$response = [
    'success' => true,
    'results' => $list,
];


echo json_encode($response);
// ?>