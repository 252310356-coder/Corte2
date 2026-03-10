<?php

require_once 'alumno.php';

$alumno1 = new Alumno();
$alumno1->setNombre("Carlos");
$alumno1->setApellidos("Pérez");
$alumno1->setNumeroControl("A12345678");
$alumno1->mostrarDatos();
echo "Correo electrónico: " . $alumno1->generarCorreo() . "<br>";