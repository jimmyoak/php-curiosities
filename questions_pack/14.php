<?php

function &find_variable(&$one, &$two, &$three) {

    if($one > 10 && $one < 20) return $one;
    if($two > 10 && $two < 20) return $two;
    if($three > 10 && $three < 20) return $three;
}

$one = 2;
$two = 20;
$three = 15;

$var = &find_variable($one, $two, $three);

$var++;

print "1: $one, 2: $two, 3: $three";

?>