<?php
// -------  Ejemplo funcion suma con array unpacking
function suma ($a, $b){
    echo "La suma de $a y $b es: ".($a+$b);
}
suma (23,12);
echo "\n";

$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];
$resultado = [...$arreglo1, ...$arreglo2]; // [1,2,3,4,5,6] Concatenación de arreglos

var_dump($resultado); // Imprime el arreglo
echo "\n";

// ------- Segundo Ejemplo funcion suma con array unpacking
function suma2 ($a, $b){
    echo "La suma de $a y $b es: ". $a + $b;
}
$numeros = [2,4];
suma2(...$numeros); // 6
echo "\n";

// ------- Terecer Ejemplo funcion suma con array unpacking
function suma3 ($a, $b){
    echo "La suma de $a y $b es: ". array_sum([...$a, ...$b]);
}
echo "\n";

function suma_infinita(...$params){
    $suma = 0;
    foreach ($params as $param){
        $suma += $param;
    }
    echo "La suma de los números es: $suma \n";
}
suma_infinita(1,2,3,4,5,6,7,8,9,10);