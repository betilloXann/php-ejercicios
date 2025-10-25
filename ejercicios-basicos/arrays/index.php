<?php

$pelicula = "batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['Juan', 'Pedrito', 'Jennifer'];

//Arrays Asociativos
$personas = array(
  'nombre' => 'Victor',
  'apellidos' => 'Moreno',
  'web' => 'hola.es'
);

echo $personas['apellidos'];

//Recorrer un array con FOR
echo "<h1>Listado de peliculas </h1>";

echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>" . $peliculas[$i] . "</li>";
}
echo "</ul>";

echo "<h1>Listado de cantantes </h1>";
echo "<ul>";
//Recorrer con FOREACH
foreach ($cantantes as $key => $cantante) {
    echo "<li>" . $cantante . "</li>";
}
echo "</ul>";

//Arrays multidimensionales
$contactos = array(
  array(
    'nombre' => 'Alberto',
    'email' => 'alberto10pumas@gmail.com'
  ),
  array(
    'nombre' => 'Juanita',
    'email' => 'juanita@gmail.com'
  ),
  array(
    'nombre' => 'Raphina',
    'email' => 'ras@gmail.com'
  ),
);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}
