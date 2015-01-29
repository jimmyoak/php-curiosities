<?php

$object = new \stdClass();
$object->name = 'asdasd';
$anArray = [
    0 => 0,
    0.2 => 1,
    0.999 => 2,
    '0' => 3,
    '0.4' => 4,
    '0hola' => 5,
    0xA => 6,
];

//[0 => 3, '0.4' => 4, '0hola' => 5]

var_dump($anArray);