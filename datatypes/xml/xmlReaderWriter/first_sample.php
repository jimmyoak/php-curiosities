<?php

$path = __DIR__ . '/../sample1.xml';

$xmlReader = new XMLReader();
$xmlReader->open($path);

while($xmlReader->read()) {
    echo 'Name: ' . $xmlReader->name . " /// Type: " . $xmlReader->nodeType . " /// Value: " . $xmlReader->value;

    echo "\n";
}
