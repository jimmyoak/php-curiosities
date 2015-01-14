<?php

$asClass = new \stdClass();
$asClass->name = "Value";
$asClass->bigint = "34985776347563425873426587243562348756478";

//Simple class to json
echo json_encode($asClass);

echo "\n\n\n\n";

$asArray = [
    'name' => "Value",
    'bigint' => '34985776347563425873426587243562348756478',
    'properties' => [
        'a' => 1
    ],
];

//Simple array to json
echo json_encode($asArray);

echo "\n\n\n\n";

//Max depth error
echo json_encode($asArray, null , 1);
var_dump(json_last_error_msg());

echo "\n\n\n\n";

//With numbers
echo json_encode($asArray, JSON_NUMERIC_CHECK);