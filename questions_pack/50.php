<?php

$array = [1 => 0, 2, 3, 4];

$count = count($array);

$slice = array_slice($array, 3);

$merge = array_merge(['x'], $slice);

array_splice($array, 3, $count, $merge);

var_dump($count, $slice, $merge);
print_r($array);

$array = ['a' => 2, 'b' => 3, 'c' => 4];
var_dump($array);
array_splice($array, 1, 1);
var_dump($array);
