<?php

$anArray = [
    1 => 0,
    '1' => 1,
];

var_dump($anArray);

$anArray = [
    '1' => 0,
    1 => 1,
];

var_dump($anArray);