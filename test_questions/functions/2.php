<?php

function myFunction($a)
{
    $a++;
}
$b = 1;
myFunction(&$b);

echo $b;