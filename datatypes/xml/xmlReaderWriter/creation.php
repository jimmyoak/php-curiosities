<?php

$xmlWriter = new XMLWriter();
$xmlWriter->openMemory();

$xmlWriter->startDocument(1.0, 'UTF-8');

$xmlWriter->startElement('root');
    $xmlWriter->startElement('node');
    $xmlWriter->writeAttribute('length', 5);
        $xmlWriter->writeElement('leaf', 'Value');
    $xmlWriter->endElement();
$xmlWriter->endElement();

echo $xmlWriter->outputMemory();