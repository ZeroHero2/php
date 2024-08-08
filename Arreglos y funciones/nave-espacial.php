<?php
$precios_de_cafe = [12,14,34,21,19,6];

// Ordenar de menor a mayor
// Se usa funcion anónima para comparar los elementos
usort($precios_de_cafe, function($a, $b){
    return $a <=> $b;
});
var_dump($precios_de_cafe);