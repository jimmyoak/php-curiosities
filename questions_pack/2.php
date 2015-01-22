<?php

class M
{
    function m()
    {
        echo "M";
    }

    function construct()
    {
        echo "mmm";
    }
}

$m = new M();
$m->m();