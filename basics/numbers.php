<?php

echo "NUMBERS: \n";
$decimal = 56;
$octal = 0123; //83
$hex = 0xAA; // 170
$binary = 0b10100101; // 165

$float = 567.8;
$floatE = 5e3; // 5 x (10 ^ 3)

echo 'Decimal: ' . $decimal . "\n";
echo 'Octal: ' . $octal . "\n";
echo 'Hexadecimal: ' . $hex . "\n";
echo 'Binario: ' . $binary . "\n\n";
echo 'Float: ' . $float . "\n";
echo 'FloatE: ' . $floatE . "\n\n";

$maxInt = PHP_INT_MAX;
$negativeMaxInt = -PHP_INT_MAX;
$overflow = PHP_INT_MAX + 1;
echo 'PHP_INT_MAX [64 bits]: ' . decBinary($maxInt, 64) . ' typeof: ' . gettype($maxInt) . "\n";
echo '-PHP_INT_MAX [64 bits]: ' . decBinary($negativeMaxInt, 64) . ' typeof: ' . gettype($negativeMaxInt) . "\n";
//Nótese que en caso de desbordamiento de entero, PHP no lanza ningún Warning ni peta ni nada, simplemente se convierte a double:
echo 'PHP_INT_MAX + 1 (overflow?) [64 bits]: ' . decBinary($overflow, 64) . ' typeof: ' . gettype($overflow) . "\n";



function decBinary($value, $positions = 8)
{
    return sprintf('%5d', $value) . ': ' . binary($value, $positions);
}
function binary($value, $positions = 8)
{
    return sprintf('%0'.$positions.'b', $value);
}
