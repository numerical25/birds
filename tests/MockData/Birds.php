<?php
$types = include base_path('tests/MockData/BirdTypes.php');
$actions = include base_path('tests/MockData/BirdActions.php');
return [
    [
        'name' => $types[0]['name'],
        'action' => $actions[0]['name'],
    ],
    [
        'name' => $types[1]['name'],
        'action' => $actions[0]['name'],
    ]
];
