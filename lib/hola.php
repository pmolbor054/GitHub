<?php
// Autor: Pedro Molina <pedro@uco.es>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
