 <?php
// Autor: Pedro P Molina <pmolbor054@g.educaand.es>
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";

