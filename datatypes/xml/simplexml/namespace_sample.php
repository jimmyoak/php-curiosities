<?php

/**
 * Sacado directamente de PHP.net
 */

$xml = <<<EOD
<book xmlns:chap="http://example.org/titulo-capitulo">
    <title>My Book</title>
    <chapter id="1">
        <chap:titulo>Chapter 1</chap:titulo>
        <para>Donec velit. Nullam eget tellus vitae tortor gravida scelerisque. 
            In orci lorem, cursus imperdiet, ultricies non, hendrerit et, orci. 
            Nulla facilisi. Nullam velit nisl, laoreet id, condimentum ut, 
            ultricies id, mauris.</para>
    </chapter>
    <chapter id="2">
        <chap:titulo>Chapter 2</chap:titulo>
        <para>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin 
            gravida. Phasellus tincidunt massa vel urna. Proin adipiscing quam 
            vitae odio. Sed dictum. Ut tincidunt lorem ac lorem. Duis eros 
            tellus, pharetra id, faucibus eu, dapibus dictum, odio.</para>
    </chapter>
</book>
EOD;

$sxe = new SimpleXMLElement($xml);

$sxe->registerXPathNamespace('c', 'http://example.org/titulo-capitulo');
$resultado = $sxe->xpath('//c:titulo');

foreach ($resultado as $titulo) {
    echo $titulo . "\n";
}
