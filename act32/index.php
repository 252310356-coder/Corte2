<?php
require_once 'operaciones.php';

$operacion = new operaciones(5, 10);

echo "Suma sin parámetros: " . $operacion->sumarSinParametros() . "<br>";
echo "Suma con parámetros: " . $operacion->sumarConParametros(3, 7) . "<br>";
?>