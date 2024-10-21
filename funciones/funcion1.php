<?php
function saludo($nombre){
    echo "saludos " . $nombre;
}

saludo('Jesus');

echo '<br>';

function sumar($a, $b){
    $resultado = $a + $b;
    return $resultado; // devuelve el valor
}
$resultado= sumar(10,25);

echo'<br>';
echo "----- Funciones matematicas ------- " . '<br>';
$numero = 45.323241;
echo round($numero,2);
echo'<br>';
echo rand(1,100);
