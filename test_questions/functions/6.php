<?php
//Named functions cannot be assigned to variable
$x = function func($a, $b, $c) {
    print "$c|$b|$a\n";
};

print $x(1, 2, 3);
