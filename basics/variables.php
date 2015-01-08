<?php

echo "VARIABLES:\n";
$_ = 1;
$camión = 'camión'; // Se pueden crear variables con acentos
echo $camión . "\n";

echo "\n\n\n\nVARIABLE VARIABLES (también sirve para funciones):\n";
$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo '$a: ' . $a . "\n"; //Returns Hello
echo '$$a: ' . $$a . "\n"; //Returns World
echo '$$$a: ' . $$$a . "\n"; //Returns Foo
echo '$$$$a: ' . $$$$a . "\n"; //Returns Bar
echo '$$$$$a: ' . $$$$$a . "\n"; //Returns a

echo '$$$$$$a: ' . $$$$$$a . "\n"; //Returns Hello
echo '$$$$$$$a: ' . $$$$$$$a . "\n"; //Returns World

$name = '123';
$$name = '456';
echo '${\'123\'}: ' . ${'123'} . "\n";

echo "\n\n\n\nFUNCIONES: \n";
function cAsEInSeNSitiVe()
{
    echo 'CALLED!';
}
echo caseinsensitive() . "\n";
