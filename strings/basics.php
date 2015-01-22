<?php

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\\*.*?' . "\r\n";

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\*.*?' . "\r\n";


//herecdoc
$world = 'world';
echo <<<EOT
\r\n----- HERECDOC
Recordad que el despuÈs del identificador de cierre tiene que
haber como mÌnimo un salto de lÌnea.
En la lÌnea del identificador de cierre no puede haber NADA excepto
un punto y coma
Hello $world

EOT;

echo <<<'NOWDOC'
----- NOWDOC
⁄til para escapar cÛdigo php
<?php echo "Hello $world"; ?>
-----

NOWDOC;

$jugos = ["manzana", "naranja", "koolaid1" => "p˙rpura"];
echo "…l tomÛ algo de jugo $jugos[koolaid1]." . PHP_EOL;

$foo = ["bar" => "naranja"];
echo "esto est· bien: " . $foo['bar'] . PHP_EOL;
echo "esto est· bien: $foo[bar]" . PHP_EOL;
// Esto no funciona por la misma razÛn que $foo[bar] es incorrecto fuera de un string.
//echo "esto est· mal " . $foo[bar];


/* SUBSTRING */
echo "----------" .PHP_EOL;
echo substr('abcdef', 1) . PHP_EOL;     // bcdef
echo substr('abcdef', 1, 3) . PHP_EOL;  // bcd
echo substr('abcdef', 0, 4) . PHP_EOL;  // abcd
echo substr('abcdef', 0, 8) . PHP_EOL;  // abcdef
echo substr('abcdef', -1, 1) . PHP_EOL; // f
echo var_dump(substr('a', 1)) . PHP_EOL; //bool(false)


