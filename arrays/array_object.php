<?php

$anArray = [
    'id' => 1,
    'name' => 'Jimmy',
    'age' => 22,
];

$anObject = new \ArrayObject($anArray, ArrayObject::ARRAY_AS_PROPS);
$anObject->name .= ' K. Oak';
$anObject->keyNueva = 'Pepito';
$a = $anObject['name'];

var_dump($anObject, $a);

echo "\nforeach: \n";
foreach ($anObject as $property => $value) {
    echo "$property => $value\n";
}