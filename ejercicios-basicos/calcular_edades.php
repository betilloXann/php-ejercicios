<?php
// 1. Array con nombres y edades
$personas = [
    "Ana" => 17,
    "Luis" => 25,
    "Marta" => 40,
    "José" => 70,
    "Lucía" => 15
];

// 2. Recorrer el array e imprimir mensajes
foreach ($personas as $nombre => $edad) {
    if ($edad < 18) {
        echo "$nombre es menor de edad.<br>";
    } elseif ($edad <= 65) {
        echo "$nombre es adulto.<br>";
    } else {
        echo "$nombre es adulto mayor.<br>";
    }
}

// 3. Calcular edad promedio
$totalEdades = array_sum($personas); // suma de todas las edades
$cantidad = count($personas);       // cantidad de personas
$promedio = $totalEdades / $cantidad;

echo "<br>La edad promedio del grupo es: $promedio años.";
?>
