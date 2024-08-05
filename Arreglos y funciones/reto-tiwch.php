<?php

// Retirar 100 dolares 
$dinero = readline("Ingrese la cantidad de dinero que desea retirar: ");

if ($dinero >= 100){
    echo "Retirando tu dinero";
    } 
else{
    echo "No se puede retirar esa cantidad, tienes que tener mas de 100 dolares";
    }