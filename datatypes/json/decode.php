<?php

//Simple decode as stdClass
$json = file_get_contents(__DIR__ . '/sample.json');
$decoded = json_decode($json);

var_dump($decoded, json_last_error(), json_last_error_msg());

echo "\n\n\n\n";

//Simple decode as array
$json = file_get_contents(__DIR__ . '/sample.json');
$decoded = json_decode($json, true);

var_dump($decoded, json_last_error(), json_last_error_msg());


echo "\n\n\n\n";

//Max depth error
$json = file_get_contents(__DIR__ . '/sample.json');
$decoded = json_decode($json, false, 1);

var_dump($decoded, json_last_error(), json_last_error_msg());

echo "\n\n\n\n";

//bigInts as Strings on decode
$json = file_get_contents(__DIR__ . '/sample.json');
$decoded = json_decode($json, false, 512, JSON_BIGINT_AS_STRING);

var_dump($decoded, json_last_error(), json_last_error_msg());