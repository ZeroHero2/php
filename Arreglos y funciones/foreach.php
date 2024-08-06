<?php
$tiendita_de_cafe = array(
    "Café" => 15,
    "Capuchino" => 20,
    "Latte" => 25,
    "Americano" => 18,
    "Mocha" => 30,
);
foreach ($tiendita_de_cafe as $cafe => $price) {
    echo "El precio del cafe $cafe es: $$price";
    echo "\n";
}