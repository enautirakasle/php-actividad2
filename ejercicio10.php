<?php
//diferencia entre dos fechas

$fechaSalida = new DateTime('2022-12-18 11:12:34');
$fechaActual = new DateTime('now');

echo "La fecha de salida es " . $fechaSalida->format('Y-m-d H:i:s');
echo "<br>";
echo "La fecha de actual es " . $fechaActual->format('Y-m-d H:i:s');
echo "<br>";
echo "<br>";

var_dump($fechaActual);

$interval = $fechaSalida->diff($fechaActual);

echo "<h3>Para ir de vacaciones me qudan... ";
echo  $interval->format('%a días, %H horas, %i minutos');
echo "</h3>";
?>
