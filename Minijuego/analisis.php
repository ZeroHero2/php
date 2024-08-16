<?php
print_r($_REQUEST);
$palabras = ["sol", "luna", "cielo"];

if ($_REQUEST["palabra0"] == $palabras[0]){
    echo "La palabra 0 es correcta";
} else{
    echo "La palabra 0 es incorrecta, la palabra correcta es: ".$palabras[0];
}

if ($_REQUEST["palabra1"] == $palabras[1]){
    echo "La palabra 1 es correcta";
} else{
    echo "La palabra 1 es incorrecta, la palabra correcta es: ".$palabras[1];
}

if ($_REQUEST["palabra2"] == $palabras[2]){
    echo "La palabra 2 es correcta";
} else{
    echo "La palabra 2 es incorrecta, la palabra correcta es: ".$palabras[2];
}