<?php

$xmlRoot = '<?xml version="1.0" encoding="UTF-8"?><root></root>';

$xml = new SimpleXMLElement($xmlRoot);

$node = $xml->addChild('node');
$node->addAttribute('name', 'value');

$node->addChild('lead', 'Value');

echo $xml->asXML();