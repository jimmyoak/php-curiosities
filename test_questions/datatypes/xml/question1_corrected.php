<?php

$path = __DIR__ . '/question1_corrected.xml';

$xml = simplexml_load_file($path);
echo $xml->leaf;