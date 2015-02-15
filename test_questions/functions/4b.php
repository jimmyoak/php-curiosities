<?php

function increment ($a) {
    return $a++; // Ojo que está incrementado después de devolver el resultado
}

echo increment(1);