<?php

function preIncrement ($a) {
    return ++$a;
}

function postIncrement ($a) {
    return $a++;
}

echo preIncrement(1);

echo postIncrement(1);