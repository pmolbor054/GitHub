<?php
// Autor: Pedro Molina <pedro@uco.es>
// El nombre por defecto es Mundo
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
