<?php
$tiendita_de_cafe = array(
    "Café" => 15,
    "Capuchino" => 20,
    "Latte" => 25,
    "Americano" => 18,
    "Mocha" => 30,
);
foreach ($tiendita_de_cafe as $cafe => $price) {
    echo "El cafe encontrado es $cafe";
    echo "\n";
    if ($cafe == "Americano"){
        echo "Por fin al cafe que buscabas Americano";
        break ;
    }
}