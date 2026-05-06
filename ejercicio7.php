<?php

function calcularDescuento($precio) {
    $descuento = $precio * 0.10;
    $precioFinal = $precio - $descuento;
    return $precioFinal;

}

$precio = 5000;
$resultado = calcularDescuento($precio);
echo "El precio final es: " . $resultado;