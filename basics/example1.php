<?php

function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--; //comment or un comment this line to see the different effect with static variable
}

test();
test();