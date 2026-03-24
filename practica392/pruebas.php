<?php
require_once 'fraccion.php';

// Crear dos fracciones
$fraccion1 = new Fraccion(1, 2); // Representa 1/2
$fraccion2 = new Fraccion(3, 4); // Representa 3/4
// Sumar las fracciones
echo $fraccion1->sumar($fraccion2) . "<br>"; 
//Resta
echo $fraccion1->restar($fraccion2) . "<br>"; 
//potencia
echo $fraccion1->potencia(2) . "<br>"; 
//Valor decimal
echo $fraccion1->fraccion_porcentaje() . "<br>"; 
//Multiplicación
echo $fraccion1->multiplicar($fraccion2) . "<br>"; 
//División
echo $fraccion1->dividir($fraccion2) . "<br>";
