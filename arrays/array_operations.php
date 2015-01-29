<?php

$a = [1, 2, 3];
$b = [4, 5];

$c = $a + $b;
var_dump($c);

$a = [1, 2, 3];
$b = [4 => 4, 5];

$c = $a + $b;
var_dump($c);

$a = [4, 5];
$b = [1, 2, 3];

$c = $a + $b;
var_dump($c);

// Sólo funciona la suma, lo demás peta:
// var_dump($a - $b);

$a = [
    'carlos' => 0,
    'aitor' => 1,
];
$b = [
    'aitor' => 2,
    'jimmy' => 3
];

$c = $a + $b;
$d = $b + $a;
var_dump($c);
var_dump($d);