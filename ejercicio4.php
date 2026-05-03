<?php

$presupuesto = 5000;
$precioProducto = 3200;
$costoEnvio = 2000;

$total = $precioProducto + $costoEnvio;
$faltante = $total - $presupuesto;

echo "Presupuesto: $presupuesto\n";
echo "Precio del producto: $precioProducto\n";
echo "Costo de envío: $costoEnvio\n";
echo "Total a pagar: $total\n";


if ($total <= $presupuesto) {
    echo "Puedes comprar el producto.";
} else {
    echo "No puedes comprar el producto, excede tu presupuesto. \n Te faltan $faltante.";
}