<?php

/*
Este código no funciona, da syntax error, ya que empty es una
función de PHP y espera apertura de paréntesis y parámetros.

Para que este código funcionara, podríamos:
 1 - Cambiar la constante EMPTY de nombre. Ej.: EMPTY_STRING
 2 - Usar la función constant() para obtener el valor de empty. Ej.: constant('EMPTY')
*/

define('CONSTANT', 1);
define('_CONSTANT', 0);

define('EMPTY', '');

if (!empty(EMPTY)) {
    if (!((boolean) _CONSTANT)) {
        print 'One';
    }
}
else if (constant('CONSTANT') == 1) {
    print 'Two';
}
