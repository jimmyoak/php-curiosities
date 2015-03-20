<?php

/**
 * @author Fernando Villar
 */


$a = array('zero', 'one', 'two');

foreach ($a as &$v) {
}
foreach ($a as $v) {
}

var_dump($a);
