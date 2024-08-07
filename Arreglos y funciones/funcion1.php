<?php
// Definimos 
function dame_pokemon(){

    $numero_random = rand(1,5); // Genera un numero aleatorio entre 1 y 5
    switch ($numero_random){
        case 1:
            echo "Pikachu";
            break;
        
        case 2:
            echo "Charmander";
            break;

        case 3:
            echo "Bulbasaur";
            break;

        default:
            echo "No hay pokemones";
            break;
    }
}

dame_pokemon(); // Llamamos a la funcion
echo "\n";
