<?php

$list = [
    [
    'text' => 'pane',
    'done' => false
    ],
    [
    'text' => 'latte',
    'done' => false
    ],
    [
    'text' => 'mele',
    'done' => true
    ],
    [
    'text' => 'insalata',
    'done' => true
    ],
    [
        'text' => 'cioccolata',
        'done' => false
    ]
    ];

header('Content-Type: application/json');

$response = [
    'success' => true,
    'results' => $list,
];


echo json_encode($response);
// ?>