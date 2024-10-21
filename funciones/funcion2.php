<?php
function areaT ($b,$h){

    $calcularArea = ($b * $h) / 2; 
    return $calcularArea;
}

echo "El area del triangulo es: " . areaT(4,5) . '<br>';

echo "-------- Caracteres especiales ------- " . '<br>';

// Podemos imprimir caracteres especiales de html 
$texto = '<br> Holasss';
echo htmlspecialchars($texto) . '<br>';

// Elimina los espacios en blanco del principio y final 
$texto2 = ' Holis señor gato ';
echo trim($texto2) . '<br>';

// Cuenta cuantos caracteres tenemos
echo strlen($texto2) . '<br>';

// Extrae de una cadena de texto ciertos caracteres 
echo substr($texto2, 1,4) . '<br>';

// Dar cadenas de texto en mayusculas y minisculas
echo strtoupper($texto2) . '<br>';
echo strtolower($texto2) . '<br>';
