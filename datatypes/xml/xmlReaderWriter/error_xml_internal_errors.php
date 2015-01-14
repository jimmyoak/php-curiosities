<?php

$path = __DIR__ . '/../error.xml';

libxml_use_internal_errors(true);

$xmlReader = new XMLReader();
$xmlReader->open($path);
$xmlReader->read();

$errors = libxml_get_errors();
var_dump($errors);