<?php

$tabla= 5;
echo "Tabla de multiplicar del $tabla: \n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $tabla * $i;
    echo "$tabla x $i = $resultado \n" ;
}   

echo "La tabla a finalizado.";