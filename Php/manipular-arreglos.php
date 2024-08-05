<?php
$edades = [19,23,42,91];
// count --Nos ayuda a devolver el numero de valores
echo count ($edades) ;

// array_push --Nos deja meter un nuevo dato
array_push($edades,89);
var_dump($edades);

// is_array --Nos dice si es o no un arreglo
var_dump(is_array($edades));

// explode --Cambia un String a array 
$lista_de_frutas= "fresa,manzana,platano";
$frutas_array = explode(",",$lista_de_frutas) ;
var_dump($frutas_array);

// implode --Cambia un array a String 
$lista_de_pan = ["bolillo","dona","oreja"];
$pan_string = implode(",", $lista_de_pan);
var_dump($pan_string);