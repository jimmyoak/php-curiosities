<?php

function func($x, $x = 1, $x = 2)
{
    var_dump(func_num_args(), func_get_args());
    return $x;
}

print func(3);

/*

You can use variable-length argument lists even if
you do specify arguments in the function header.
However, this won?t affect the way the variable-length
argument list functions behave?for example, func_num_args()
will still return the total number of arguments passed to
your function, both declared and anonymous.

 */

function x($a,$b,$c,$d) {
    var_dump(func_num_args());
}

x(1,23,4,5,6,7,8,9,76,5,4,6);