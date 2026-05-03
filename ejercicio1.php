<?php

$nombre = readline("Ingresa tu Nombre: ");


$edad = readline("Ingresa tu edad: ");

if ($edad >= 18)   {
    echo "Hola $nombre, Bienvenido .";
 } elseif ($edad < 18 && $edad >= 0) {
    echo "Acceso denegado";
} else {
    echo "Edad no válida";
}