<?php

class AClass
{
    public static function b(Closure $c)
    {
        echo '5';
    }
}

var_dump(is_callable(['AClass', 'b']));