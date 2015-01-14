<?php

$path = __DIR__ . '/question1.xml';

$xml = simplexml_load_file($path);
echo $xml->leaf;