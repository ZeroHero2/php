<?php
$asientos_disponibles = 1;
if ($asientos_disponibles > 2){
    echo"Puedes ver la pelicula";
}
else{
    echo "Lo sentimos, ya no hay boletos disponibles";
}
echo "\n";

// Uso de else if 
$a = 4; $b=6;
if ($a>$b){
    echo "a es mayor que b";
} elseif ($a == $b){
    echo "a es igual a b";
} else {
    echo "a es menor que b";
}