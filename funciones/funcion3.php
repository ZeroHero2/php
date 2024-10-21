<?php
// Funciones para arreglos

$paises = ["Mexico","España", "Bolivia","EU","Rusia","Japon"];
$amigo = ['telefono' => 551234124, 'edad' =>20, 'pais' => 'Mexico'];

// Extraer algun dato del arreglo 
extract($amigo);
echo $telefono . '<br>' ;


// Extraer el ultimo elemento del array
$ultimoPais = array_pop($paises);

foreach($paises as $pais){
    echo $pais . '<br>' ;
}
echo 'Muestra el ultimo elemento de mi arreglo que es:' . '<br>';
echo $ultimoPais . '<br>'; 

// Inserta un simbolo a un array entre cada elemento
echo 'Muestra mis elementos con una insersion' . '<br>';
echo join('/',$paises);