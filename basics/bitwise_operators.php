<?php

echo "OPERADORES A NIVEL DE BITS: \n";//Trabajan bit por bit
//Valores ejemplo:
$firstValue = 167;
$secondValue = 69;

$and = $firstValue & $secondValue; //El resultado será el que ambos bits sean 1, lo demás 0
$or = $firstValue | $secondValue; //El resultado será el que uno o ambos bits sea 1
$xor = $firstValue ^ $secondValue; // El resultado será el que uno pero NO AMBOS sea 1
$not = ~$firstValue; // Se invierten todos los bits
$zeroNot = ~0;
$shiftLeft = $firstValue << 1; //Desplazamiento a izquierda de los bits (1 posición)
$shiftTwiceLeft = $firstValue << 2;//Desplazamiento a izquierda de los bits (2 posiciones)
$shiftRight = $firstValue >> 1;//Desplazamiento a derecha de los bits (1 posición)
$shiftTwiceRight = $firstValue >> 2;//Desplazamiento a derecha de los bits (2 posiciones)

echo 'AND:' . "\n";
echo decBinary($firstValue) . "\n";
echo decBinary($secondValue) . "\n";
echo '-------------------' ."\n";
echo decBinary($and). "\n\n\n";

echo 'OR:' . "\n";
echo decBinary($firstValue) . "\n";
echo decBinary($secondValue) . "\n";
echo '-------------------' ."\n";
echo decBinary($or). "\n\n\n";

echo 'XOR:' . "\n";
echo decBinary($firstValue) . "\n";
echo decBinary($secondValue) . "\n";
echo '-------------------' ."\n";
echo decBinary($xor). "\n\n\n";

echo 'NOT (~) [64 bits]:' . "\n";
echo decBinary($firstValue, 64) . "\n";
echo '-------------------' ."\n";
echo decBinary($not). "\n\n\n";

echo 'ZERO NOT (~) [64 bits]:' . "\n";
echo decBinary(0, 64) . "\n";
echo '-------------------' ."\n";
echo decBinary($zeroNot). "\n\n\n";

echo 'SHIFT LEFT (2^1) (x2):' . "\n";
echo decBinary($firstValue, 16) . "\n";
echo '-----------------------------' ."\n";
echo decBinary($shiftLeft, 16). "\n\n\n";

echo 'SHIFT TWICE LEFT (2^2) (x4):' . "\n";
echo decBinary($firstValue, 16) . "\n";
echo '-----------------------------' ."\n";
echo decBinary($shiftTwiceLeft, 16). "\n\n\n";

echo 'SHIFT RIGHT (2^1) (/2):' . "\n";
echo decBinary($firstValue, 16) . "\n";
echo '-----------------------------' ."\n";
echo decBinary($shiftRight, 16). "\n\n\n";

echo 'SHIFT TWICE RIGHT (2^2) (/4):' . "\n";
echo decBinary($firstValue, 16) . "\n";
echo '-----------------------------' ."\n";
echo decBinary($shiftTwiceRight, 16). "\n\n\n";


function decBinary($value, $positions = 8)
{
    return sprintf('%5d', $value) . ': ' . binary($value, $positions);
}
function binary($value, $positions = 8)
{
    return sprintf('%0'.$positions.'b', $value);
}
