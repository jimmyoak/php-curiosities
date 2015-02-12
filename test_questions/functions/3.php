<?php
$v1 = 1;
$v2 = 2;
$v3 = 3;
function myFunction() {
    $GLOBALS['v1'] *= 2;
    $v2 *= 2;
    global $v3; $v3 *= 2;
}
myFunction();
echo "$v1$v2$v3";

var_dump($GLOBALS);