<?php

$productos = [
    ["nombre" => "Manzanas", "precio" => 1500],
    ["nombre" => "Leche", "precio" => 2300],
    ["nombre" => "Pan", "precio" => 800],
    ["nombre" => "Queso", "precio" => 3200],
    ["nombre" => "Huevos", "precio" => 4000]
];

$total = 0;

foreach ($productos as $producto) {
    echo $producto["nombre"] . ": $" . number_format($producto["precio"], 2) . "\n";
    $total += $producto["precio"];
}
echo "-------------------------\n";
echo "Total: $" . number_format($total, 2) . "\n";