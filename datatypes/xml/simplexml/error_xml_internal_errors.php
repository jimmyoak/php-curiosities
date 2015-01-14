<?php

$path = __DIR__ . '/../error.xml';

libxml_use_internal_errors(true);

$xml = simplexml_load_file($path);

$errors = libxml_get_errors();
var_dump($xml, $errors);