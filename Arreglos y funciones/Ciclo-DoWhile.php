<?php
do{
    $nombre = readline("Ingresa tu nombre");
    echo "\n";
}while(strlen($nombre) == 0 );

echo"Hola, bienvenido " . $nombre . "!";