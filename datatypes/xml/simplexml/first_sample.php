<?php

$path = __DIR__ . '/../sample1.xml';

/**
 * SimpleXML nos permite tratar los XMLs como objetos
 */
$xml = simplexml_load_file($path);
//var_dump($xml);

echo $xml->data['length'] . ' /// type: ' . get_class($xml->data['length']) . "\n";

foreach ($xml->media->image as $image) {
    echo $image . ' /// type: ' . get_class($image) . "\n";
}

$casted = (string)$image;
var_dump($casted);