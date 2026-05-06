<?php

function validarNumero($numero) {
    if ($numero > 0) {
        return "El número $numero es POSITIVO";
    } elseif ($numero < 0) {
        return "El número $numero es NEGATIVO";
    } else {
        return "El número es CERO";
    }
}


$numeros = [42, -7, 0, 100, -3.5];

foreach ($numeros as $num) {
    $resultado = validarNumero($num);
    echo $resultado . "\n";
}