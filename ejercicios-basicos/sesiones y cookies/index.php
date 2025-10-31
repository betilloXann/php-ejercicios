<?php

/*
Sesión: Almacenar y persistir datos del usuario miesntras que navega en un sitio web,
hasta que cierra sesión o cierra el navegador
 * */

//Iniciar la sesión

session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//variable de sesión
$_SESSION['variable_persistente'] = "Hola soy una serpiente en tu bota";

echo $variable_normal . "<br/>";
echo $_SESSION['variable_persistente'];
