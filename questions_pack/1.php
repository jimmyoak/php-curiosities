<?php
$m = 3;
$n = 0;
function l()
{
    $m = 0;
    $m++;
    global $n;
    return array($n, $m);
}

echo implode((L(l())), ',');