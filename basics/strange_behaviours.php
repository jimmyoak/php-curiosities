<?php

echo 'COSILLAS RARAS: ' . "\n";
echo 'Números con strings (cast a integer de "8hola"): ' . ((int)'8hola') . "\n";
echo 'Números con strings (cast a integer de "hola8"): ' . ((int)'hola8') . "\n";
echo 'Números con strings (cast a float de "7.45e6hola"): ' . ((float)'7.45e6hola') . "\n";
echo 'Números con strings (cast a float de "7.hola45"): ' . ((float)'7.hola45') . "\n";
echo 'Comparativas 5 == "5hola": ' . (5 == '5hola' ? 'true' : 'false') . "\n";
echo 'Comparativas "5hola" == 5: ' . ('5hola' == 5 ? 'true' : 'false') . "\n";
echo 'Comparativas "5" == "5hola": ' . ('5' == '5hola' ? 'true' : 'false') . "\n";
echo 'Comparativas 5 == "7hola": ' . (5 == '7hola' ? 'true' : 'false') . "\n";
echo 'Comparativas 5 == "hola8": ' . (5 == 'hola8' ? 'true' : 'false') . "\n";
