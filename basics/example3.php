<?php

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($j % 2 !== 0) {
            break;
        }

        echo $i . ' ' . $j .PHP_EOL;
    }
}

echo PHP_EOL . PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($j % 2 !== 0) {
            continue 2;
        }

        echo $i . ' ' . $j .PHP_EOL;
    }
}