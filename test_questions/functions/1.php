<?php

function addValues()
{
    $sum = 0;
    for ($i = 1; $i <= func_num_args(); $i++) {
        $sum += func_get_arg($i);
    }

    return $sum;
}

echo addValues(1, 2, 3);