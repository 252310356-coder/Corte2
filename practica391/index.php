<?php
require_once 'caja.php';        

$caja1 = new caja(2.5, 3.0, 4.0);

echo "El volumen de la caja es: " . $caja1->volumen() . "<br>";
echo "El área total de la caja es: " . $caja1->areaTotal() . "<br>";

echo "El ancho de la caja es: " . $caja1->getancho() . "<br>";
echo "El alto de la caja es: " . $caja1->getalto() . "<br>";
echo "El largo de la caja es: " . $caja1->getlargo() . "<br>";

echo "Copiamos la caja a caja2...<br>";
//Se usa con 2 puntos porque el metodo es statico, no se necesita un objeto para usarlo, se puede usar la clase directamente por eso los 2 puntos
$caja2 = Caja::copiarCaja($caja1);
//La ventaja de hacer el to string es que podemos modificar que se muestra y que no
echo $caja2 . "<br>";
//Tambien se puede usar directamente sin embargo aqui no hay control de que se muestra y que no, en este caso se muestra igual
echo $caja2 . "<br>";

echo "Cajas mas grande y mas pequeña que la actual<br>";
$cajaMasGrande = $caja2->cajaMasGrande();
echo "Caja mas grande: " . $cajaMasGrande. "<br>";
$cajaMasPequena = $caja2->cajaMasPequena();
echo "Caja mas pequeña: " . $cajaMasPequena. "<br>"; 