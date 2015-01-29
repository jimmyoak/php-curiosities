<?php

/**
 * @author Fernando Villar
 */

//Result:
/*

array(3) {
  [0] =>
  string(4) "zero"
  [1] =>
  string(3) "one"
  [2] =>
  string(3) "one" // <-------------------------------
}
*/

$a = array('zero', 'one', 'two');

foreach ($a as &$v) {
}
foreach ($a as $v) {
}

var_dump($a);