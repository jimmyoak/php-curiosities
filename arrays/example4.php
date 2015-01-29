<?php

$array = [
    [1, 2],
    'a' => [
        'b' => 1,
        'c'
    ]
];

echo $array[5][2];
echo $array[5][2] = 2;