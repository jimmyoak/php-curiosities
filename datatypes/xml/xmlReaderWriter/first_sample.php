<?php

$path = __DIR__ . '/../sample1.xml';

/**
 * SimpleXML nos permite tratar los XMLs como objetos
 */
$xmlReader = new XMLReader();
$xmlReader->open($path);

while($xmlReader->read()) {
    echo 'Name: ' . $xmlReader->name . " /// Type: " . $xmlReader->nodeType . " /// Value: " . $xmlReader->value;

    echo "\n";
}
