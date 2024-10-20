<?php
// Arreglo
$semana = ["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];

echo $semana[1] . '<br/>';

// Arreglo asociativo
$alex = [
  'telefono' => 5518273941,
  'edad' => 13,
  'apellido'=> 'Lopez' ,
  'pais' => 'mexico'
];

echo $alex ['telefono'] . '<br/>';

// Arreglo multidimensional
$amigos = [
 ["Alejandro", 20],
 ["Cesar",45],
 ["Mario",32]
];
echo $amigos[0][0] . '<br/>' ;

// Nos da el valor del arreglo
echo count($amigos) ;
$conteo = count ($amigos)-1;
$amigos[$conteo];
