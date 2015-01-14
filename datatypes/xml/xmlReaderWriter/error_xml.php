<?php

$path = __DIR__ . '/../error.xml';

$xmlReader = new XMLReader();
$xmlReader->open($path);
$xmlReader->read(); //Hasta que no hacemos el read no peta