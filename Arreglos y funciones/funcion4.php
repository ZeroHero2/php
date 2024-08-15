<?php
// $nombre = "Paco";
// $apellido = "Perez";
// echo "Mi nombre es $nombre $apellido";

function concatenar($nombre, $apellido){
    echo "Mi nombre es $nombre $apellido";
}
concatenar("Paco", "Perez");

echo "\n";

function sumarNumeros ($numeros){
    $suma = 0; 
    for ($i=0; $i<4; $i++){
        $suma += $numeros[$i];
    }
    echo "La suma de los números es: $suma";
} 
$numeros = [1, 2, 3, 4];
sumarNumeros ($numeros);

