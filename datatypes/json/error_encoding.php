<?php

$json = file_get_contents(__DIR__ . '/error_encoding.json');
$decoded = json_decode($json);

var_dump($decoded, json_last_error(), json_last_error_msg());